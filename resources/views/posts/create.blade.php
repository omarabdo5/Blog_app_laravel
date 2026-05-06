@extends('layouts.app')
@section('title')Create Description

@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif
<form  method="POST"action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
        <label for="form-label">Title</label>
        <input type="text"class="form-control"name='title' value="{{old('title')}}">
    </div>
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    <button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection
