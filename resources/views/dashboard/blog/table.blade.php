@extends('layouts.master')
@section('content')
    <main role="main" class="">
        <section>
            {{-- {{$success}} --}}
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    All Blogs
                    <div class="button">
                        <a class="btn btn-success" href="{{route('blog-dashboard.create')}}">Create</a>
                        <a class="btn btn-warning" href="{{route('TrashedBlog')}}">Trashed</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Author/creator</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($Blogs as $blog)
                                <tr>
                                    <th scope="row">{{$blog->id}}</th>
                                    <td>
                                        <img width="80" src="{{asset('storage/app/uploads/'.$blog->image_url)}}" alt="">
                                        {{-- <img width="80" src="assets/image/blog/images.jpeg" alt=""> --}}
                                    </td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->creator}}</td>
                                    <td>{{$blog->created_at}}</td>
                                    <td>
                                        <a class="my-1 mx-1 btn btn-sm btn-success" href="{{route('blog-dashboard.show', $blog->id)}}">Show</a>
                                        <a class="my-1 mx-1 btn btn-sm btn-primary" href="{{route('blog-dashboard.edit', $blog->id)}}">Edit</a>
                                        <form class="py-0 px-0 bg-transparent shadow-0" action="{{route('blog-dashboard.destroy', $blog->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="my-1 mx-1 btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
