@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
    <div class="sm:grid sm:grid-cols-5">
        <div class="sm:col-start-2 sm:col-span-3 px-3 py-4">
            User profile: {{ $user->name }}
            <h2>Posts:</h2>
            @foreach($user->posts as $post)
            <p><a href="{{ url('/chirp/' . $post['id']) }}">{{ $post['text'] }}</a></p>
            @endforeach
        </div>
    </div>
@endsection
