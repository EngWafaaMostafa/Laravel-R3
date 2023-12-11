<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::get();
        return view('AddPost', compact("post"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->Title = $request->Title;
        $post->Content = $request->Content;
        $post->Auther = $request->Auther;
        //$post->About = $request->About;
        //$post->Comments = $request->Comments;
        if (isset($request->Published)) {
            $post->Published = 1;
        } else {
            $post->Published = 0;
        }
        //print($post);
        $post->save();
        return 'Data added successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
