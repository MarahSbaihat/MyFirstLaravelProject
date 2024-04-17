@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Home</h1>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
        <div class="row mt-5">
            @foreach ($blogs as $blog)
                @if ($blog['status']==1)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$blog['title']}}</h3>
                                <p>{{$blog['body']}}</p>
                            </div>
                        </div>
                    </div>
                @else
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$blog['title']}}</h3>
                            <p>{{$blog['body']}}</p>
                            <div class="btn-sm btn-warning mx-1 my-1">Pending</div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            @php
                $data = false;
            @endphp
            @isset($data)
                <div class="alert alert-success">Data is set.</div>
            @endisset
            @switch($data)
                @case(true)
                    <div class="alert alert-success">Data is true.</div>
                    @break
                @default
                    <div class="alert alert-danger">Data is false.</div>
            @endswitch
            @empty($data)
                <div class="alert alert-success">Data is empty.</div>
            @endempty
        </div>
    </main>
@endsection
