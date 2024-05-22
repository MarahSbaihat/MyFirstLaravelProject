@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <section>
            <div class="card">
                <div class="card-header">
                    <h3>Blogs</h3>
                </div>
                <div class="card-body">
                    <a href="{{route('blog-dashboard.index')}}" class="btn btn-primary">Show</a>
                </div>
            </div>
        </section>
    </main>
@endsection
