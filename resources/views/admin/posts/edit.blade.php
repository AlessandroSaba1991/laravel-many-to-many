@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Edit "{{$post->title}}</h1>
    @include('partials.errors')
    <form class="bg-light mt-5 p-3" action="{{route('admin.posts.update',$post->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert Title" aria-describedby="helpTitle" value="{{$post->title}}">
                @include('partials.single_errors',['variable' => 'title'])
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Insert image" aria-describedby="helpimage" value="{{$post->image}}">
                @include('partials.single_errors',['variable' => 'image'])
            </div>
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Category</label>
          <select class="form-control" name="category_id" id="category_id">
            <option>Select Category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}" {{$post->category_id == old('category_id', $category->id) ? 'selected' : ''}} >{{$category->name}}</option>
            @endforeach
          </select>
          @include('partials.single_errors',['variable' => 'category_id'])
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea type="text" name="body" id="body" class="form-control @error('body') is-invalid @enderror" placeholder="body" rows="5" aria-describedby="bodyHelper">{{$post->body}}</textarea>
                @include('partials.single_errors',['variable' => 'body'])
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
</div>
@endsection
