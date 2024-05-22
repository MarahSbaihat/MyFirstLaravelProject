<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        //
        $Blogs = Blog::all();
        return view('dashboard/blog/table', compact('Blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard/blog/addBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max:225'],
            'status' => ['required', 'integer'],
            'description' => 'required',
            'creator' => 'required',
        ]);

        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName);
        // return $filePath;

        $blog = new Blog();
        $blog->image_url=$filePath;
        $blog->title=$request->title;
        $blog->status=$request->status;
        $blog->description=$request->description;
        $blog->creator=$request->creator;
        $blog->save();
        return redirect()->route('blog-dashboard.index');
        // ->with('success' , 'Blog created successfully');


        // $data = $request->except(['image']);
        // $path = $request->file('image')->store('Blogs');
        // $data['image'] = $path;
        // Blog::create($data);
        // return redirect()->route('dashboard.products.index')->with('success' , 'product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $blog=Blog::findOrFail($id);
        return view('dashboard/blog/showBlog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $blog=Blog::findOrFail($id);
        return view('dashboard/blog/editBlog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => ['required', 'max:225'],
            'status' => ['required', 'integer'],
            'description' => 'required',
            'creator' => 'required',
        ]);

        $blog = Blog::findOrFail($id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => ['required', 'max:2028', 'image'],
            ]);

            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('uploads', $fileName);
            // return $filePath;

            File::delete(public_path($blog->image));

            $blog->image_url=$filePath;
        }

        // $blog = Blog::findOrFail($id);
        // $blog->image_url=$filePath;
        $blog->title=$request->title;
        $blog->status=$request->status;
        $blog->description=$request->description;
        $blog->creator=$request->creator;
        $blog->save();
        return redirect()->route('blog-dashboard.index');

        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // return $id;
        $blog = Blog::findOrFail($id);
        $blog -> delete();
        return redirect()->route('blog-dashboard.index');
    }

    public function trashed(){
        $blogs = Blog::onlyTrashed()->get();
        return view('dashboard/blog/trashed', compact('blogs'));
    }
}
