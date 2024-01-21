<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFollower;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display the specified user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index($profile)
    {
        $user = Auth::user();
        $isFollowing = false;

        if (Auth::user()->name != $profile) {
            $profile = User::where('name', $profile)->first();

            if ($user->followings()->where('user_id', $profile->id)->exists()) {
                $isFollowing = true;
            }

            $user = $profile;
        }

        return view('user.index', compact('user', 'isFollowing'));
    }

    /**
     * Toggle user follow
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function toggle_follow(Request $request)
    {
        $user = Auth::user();

        $followingId = $request->input('user_id');
        $following = User::find($followingId);

        if ($user->followings()->where('user_id', $following->id)->exists()) {
            $user->followings()->detach($following);
        } else {
            $user->followings()->attach($following);
        }

        return redirect()->back();
    }

    /**
     * Log the user out.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
