<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::latest()->get();

        return view('post.index', compact('user', 'posts'));
    }

    /**
     * Display a listing of the resource where user follows at least 5 users.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function following()
    {
        $user = Auth::user();

        $followingIds = [];
        foreach ($user->followings as $following) {
            array_push($followingIds, $following->id);
        }
        $followReq = (count($followingIds) >= 5);
        $posts = Post::whereIn('user_id', $followingIds)->latest()->get();

        return view('post.following', compact('user', 'followReq', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:1000',
        ]);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->text = $request->input('text');
        $post->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if ($post->user_id == Auth::user()->id || Auth::user()->id == 1) {
            return view('post.edit', compact('post'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:1000',
        ]);

        $post = Post::find($request->input('post'));

        if ($post->text == $request->input('text')) {
            return redirect()->back()->withErrors(['text' => 'The text has not changed'])->withInput();
        }

        $post->text = $request->input('text');
        $post->save();

        return redirect('/home');
    }

    /**
     * Show the form for removing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = Post::find($id);

        if ($post->user_id == Auth::user()->id || Auth::user()->id == 1) {
            return view('post.delete', compact('post'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $post = Post::find($request->input('post'));
        $post->delete();

        return redirect('/home');
    }
}
