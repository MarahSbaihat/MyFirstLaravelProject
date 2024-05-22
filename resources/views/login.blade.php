@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <section>
            <div class="container">
                <h2>Sign in</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form id="registrationForm" action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <fieldset>
                        <legend>User Information</legend>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">User Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </fieldset>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <br>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection
