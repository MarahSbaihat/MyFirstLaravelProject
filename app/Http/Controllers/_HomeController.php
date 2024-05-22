<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class _HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        // $blogs = [[
        //     'title' => 'My first blog post',
        //     'body' => 'This is my first blog post.',
        //     'status' => 1
        // ],
        // [
        //     'title' => 'My second blog post',
        //     'body' => 'This is my second blog post.',
        //     'status' => 0
        // ],
        // [
        //     'title' => 'My third blog post',
        //     'body' => 'This is my third blog post.',
        //     'status' => 1
        // ],
        // [
        //     'title' => 'My fourth blog post',
        //     'body' => 'This is my fourth blog post.',
        //     'status' => 1
        // ]];

        //QUERY_______________________
        // return DB::table('blogs')->get();
        // return DB::table('blogs')->first();
        // return DB::table('blogs')->where('status','=',1)->get();
        // return DB::table('blogs')->pluck('title','id');
        // return DB::table('blogs')->where('id',10)->get();
        // return DB::table('blogs')->where('id','>',10)->get();
        // return DB::table('blogs')->where('id','>',10)->where('id','!=',20)->get();

        //INSERT______________________
        // DB::table('blogs')->insert([[
        //     'title'=>'TITLE',
        //     'description'=>'DESCRIPTION',
        //     'status'=>0,
        //     'creator'=>'ADMIN'
        // ],[
        //     'title'=>'TITLE1',
        //     'description'=>'DESCRIPTION1',
        //     'status'=>1,
        //     'creator'=>'ADMIN1'
        // ],[
        //     'title'=>'TITLE2',
        //     'description'=>'DESCRIPTION2',
        //     'status'=>2,
        //     'creator'=>'ADMIN2'
        // ],[
        //     'title'=>'TITLE3',
        //     'description'=>'DESCRIPTION3',
        //     'status'=>3,
        //     'creator'=>'ADMIN3'
        // ]]);
        // dd('success');

        //UPDATE____________________
        // return DB::table('blogs')->where('status','=',0)->get();
        // DB::table('blogs')->where('status',0)->update([
        //     'title'=>'Updated Title',
        //     'description'=>'Updated Description',
        // ]);
        // return DB::table('blogs')->where('status','=',0)->get();
        // dd('success');

        //DELETE___________________
        // DB::table('blogs')->where('status',3)->delete();
        // DB::table('blogs')->delete(61);
        // return DB::table('blogs')->get();
        // dd('success');

        //JOIN_____________________
        // $data = DB::table('blogs')
        //         ->join('blogs','blogs.user_id','=','users.id')
        //         ->select('users.*','blogs.title as blogTitle')
        //         ->get();
        // dd($data);

        //AGGREGATES_______________
        // return DB::table('blogs')->count();
        // return DB::table('blogs')->sum('status');
        // /**
        //  * count()
        //  * max()
        //  * min()
        //  * avg()
        //  * sum()
        //  */




        //MODEL____________________
        // return $blogs=Blog::all();
        // return Blog::findOrFail(60);
        // return Blog::find(60);

        // return $blog->title;

        //VIEW_____________________
        // return view('home',compact('blogs'));
        return view('home');
    }
}
