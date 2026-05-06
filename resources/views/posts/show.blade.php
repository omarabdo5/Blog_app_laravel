@extends('layouts.app')
@section('title')<h1>Show Post Page</h1>@endsection




@section('content')
<div class="card">
    <h5 class="card-header">Post Info</h5>
    <div class="card-body">
        <p class="card-title">Title:{{$post->title}}</p>
        <p class="card-text">Description:{{$post->description}}</p>
    </div>
</div>

@endsection
