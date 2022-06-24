@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="text-center py-5">Preview "{{$post->title}}"</h1>
    @include('partials.message')
    <div class="card mx-auto w-50">
        <img class="img-fluid" src="{{$post->image}}" alt="{{$post->title}}">
        <div class="card-body">
            <small>Category: {{$post->category ? $post->category->name : 'No Category'}}</small>
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
        </div>
        <a class="btn btn-primary" href="{{route('admin.posts.index')}}" role="button">Back To Dashboard</a>
    </div>
</div>
@endsection
