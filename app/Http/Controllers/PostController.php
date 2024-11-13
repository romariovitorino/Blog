<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.viewIndex', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.viewCreate');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }

        return view('admin.posts.viewShow', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {

            return redirect()->route('posts.index');
        }

        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post excluído com sucesso');
    }

    public function edit($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        return view('admin.posts.viewEdit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        if (!$post = Post::find($id)) {

            return redirect()->back();
        }
        $post->update($request->all());

        return redirect()->route('posts.index');
    }
}