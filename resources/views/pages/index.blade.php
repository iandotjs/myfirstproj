@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center ">
        <h1>{{$title}}</h1>
        <br>
        <p>
            <a class="btn btn-primary btn-lg" href="/posts/create" role="button">Create DiaBlog</a> <a class="btn btn-success btn-lg" href="/posts" role="button">View DiaBlogs</a>
        </p>
    </div>
@endsection
        
