<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postsFromDB = Post::all();
        return view('posts.index', ['posts' => $postsFromDB]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('posts.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'title'=>['required','max:255'],
            'description'=>['required','max:10'],
       ]);
    // $data=$request->all();
    // $data['description'].= " " .date("Y-m-d H:i:s",time());
        // dd($data);
    Post::create($request->all());
    return redirect()->route('posts.index')->with('success','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Post $post)
    {
            $validateted = $request->validate([
            'title'=>['required','max:255'],
            'description'=>['required','max:100'],
       ]);
       $post->update($validateted);
       return redirect()->route('posts.show',$post)->with('success','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index');
    }


    public function views(Post $post){
        $post->description=$post->description.' ' .date("Y-m-d H:i:s",time()) ;
        $post->save();
        return view('posts.views', ['post' => $post]);

    }
}
