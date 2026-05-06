@extends('layouts.app')
@section('title')View Post Page @endsection




@section('content')
<div class="card">
    <h5 class="card-header">Post Info</h5>
    <div class="card-body">
        <p class="card-title">Title:{{$post->title}}</p>
        <p class="card-text">Description:{{$post->description}}</p>
    </div>
</div>

@endsection
