<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function index($user)
    {
        if (Auth::user()->name == $user) {
            $user = Auth::user();
        } else {
            $user = User::where('name', $user)->first();
        }

        return view('user.index', compact('user'));
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
