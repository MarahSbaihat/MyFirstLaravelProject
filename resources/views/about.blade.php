@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <h1>about page</h1>
        @for ($i=0; $i<count($abouts); $i++)
            <h3>{{$i+1}}</h3>
        @endfor
    </main>
@endsection

{{-- <h1>{{$about}}</h1> --}}
{{-- <h1>{{$about2}}</h1> --}}
