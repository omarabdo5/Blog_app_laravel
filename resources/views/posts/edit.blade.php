@extends('layouts.app')

@section('title') Edit

@endsection
@section('content')
<form method="POST" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('PUT')
    <div>
        <label class="form-label">Title:</label>
        <input name="title"  class="form-control" value="{{$post->title}}">
        <br>
    </div>
    <br>
    <div>
        <label class="form-label">Description:</label>
        <textarea type="text" name="description" class="form-control" rows="3" placeholder="{{$post->description}}">{{$post->description}}</textarea>
    </div>
        <br><br>
        <button class="btn btn-primary">Update Post</button>
</form>

@endsection
