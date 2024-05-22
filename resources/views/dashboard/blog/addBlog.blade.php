@extends('layouts.master')
@section('content')
    <main role="main" class="">
        <section>
            <div class="container">
                <h2>Add Blog</h2>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <li>
                                        {{ $error }}
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    @endif
                <form id="registrationForm" action="{{route('blog-dashboard.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Blog Information</legend>
                        <label for="title">Blog Title</label><br>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                        <br><br>
                        <label for="description" class="form-label">Blog Description</label><br>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        <br><br>
                        <label for="image" class="form-label">Blog image</label><br>
                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <br><br>
                        <label for="image" class="form-label">Blog Status</label><br>
                        <select name="status" class="form-control" id="">
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Author</legend>
                        <label for="creator">Author/Creator</label><br>
                        <input type="text" name="creator" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        {{-- <br><br>
                        <label for="created_at" class="form-label">Created at</label><br>
                        <input type="text" name="created_at" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                    </fieldset>
                    <br><br>
                    <a class="btn" href="{{route('blog-dashboard.index')}}">Cancel</a>
                    <button type="submit" class="btn">Add</button>
                </form>
            </div>
        </section>
    </main>
@endsection
