<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //private $columns = ['Title', 'Content', 'Auther', 'Published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::get();
        return view('Posts', compact("post"));
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
        $data = $request->validate([
            'Title' => 'required|string|max:50',
            'Description' => 'required|string|max:50',
            'Auther' => 'required|string|max:50'
        ]);
        //$data = $request->only($this->columns);
        $data['Published'] = isset($request->Published);
        Post::create($data);
        return redirect('Posts');
        //     $post = new Post();

        //     $post->Title = $request->Title;
        //     $post->Content = $request->Content;
        //     $post->Auther = $request->Auther;
        //     //$post->About = $request->About;
        //     //$post->Comments = $request->Comments;
        //     if (isset($request->Published)) {
        //         $post->Published = 1;
        //     } else {
        //         $post->Published = 0;
        //     }
        //     //print($post);
        //     $post->save();
        //     return redirect('Posts');
        //return 'Data added successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('showPost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('updatePosts', compact('post'));
    }

    /**
     * 
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'Title' => 'required|string|max:50',
            'Description' => 'required|string|max:50',
            'Auther' => 'required|string|max:50'
        ]);
        //$data = $request->only($this->columns);
        $data['Published'] = isset($request->Published);
        Post::where('id', $id)->update($data);
        return redirect('Posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect('Posts');
    }
    /**
     *trashed list
     */
    public function trashed()
    {
        $post = Post::onlyTrashed()->get();
        return view('trashedPost', compact('post'));
    }
    public function forceDelete(string $id)
    {
        Post::where('id', $id)->forceDelete();
        return redirect('Posts');
    }
    public function restore(string $id)
    {
        Post::where('id', $id)->restore();
        return redirect('Posts');
    }
}
