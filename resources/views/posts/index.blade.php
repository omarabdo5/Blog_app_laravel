@extends('layouts.app')
@section('title') Index
@endsection


@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <div class="container">
            <h1>Index Page</h1>
            @foreach($posts as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['description']}}</td>
                <td>
                    <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary btn-sm">Edit</a>


                <form  style="display:inline" method="POST" action="{{route('posts.destroy',$post['id'])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </div>
</table>
<div class="text-center mb-3">
    <a class="btn btn-primary" href="{{Route('posts.create')}}"> Create Description</a>
</div>
@endsection
