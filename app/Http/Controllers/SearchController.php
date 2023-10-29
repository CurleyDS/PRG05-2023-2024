<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->input('search')) {
            $search = $request->input('search');
            $searchUsers = User::where('name', 'LIKE', '%' . $request->input('search') . '%')->latest()->paginate(3);
            $searchPosts = Post::where('text', 'LIKE', '%' . $request->input('search') . '%')->latest()->paginate(25);

            return view('search', compact('search', 'searchUsers', 'searchPosts'));
        } else {
            return redirect()->back()->withErrors(['search' => 'Empty search'])->withInput();
        }

    }
}
