@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
    <div class="sm:grid sm:grid-cols-5">
        <div class="sm:col-start-2 sm:col-span-3 px-3 py-4">
            <h2>Post:</h2>
            <p>{{ $post['text'] }}</p>
            @if ($post->user_id == auth()->user()->id)
                <a href="{{ url('/chirp/' . $post['id']) . '/edit' }}">edit post</a>
                <a href="{{ url('/chirp/' . $post['id']) . '/delete' }}">delete post</a>
            @endif
        </div>
    </div>
@endsection
