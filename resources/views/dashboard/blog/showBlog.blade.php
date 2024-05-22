@extends('layouts.master')
@section('content')
    <main role="main" class="">
        <section>
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <h1>Show Blog</h1>
                    {{-- <div class="button">
                        <a class="btn btn-success" href="{{route('blog-dashboard.create')}}">Create</a>
                        <a class="btn btn-warning" href="">Trashed</a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <h3>{{$blog->title}}</h3>
                    <img width="400" src="{{asset('storage/app/uploads/'.$blog->image)}}" alt="">
                    {{-- <img width="80" src="assets/image/blog/images.jpeg" alt=""> --}}
                    <h4>{{$blog->description}}</h4>
                    <p>{{$blog->creator}}</p>
                    <p>{{$blog->created_at}}</p>
                </div>
            </div>
        </section>
    </main>
@endsection
