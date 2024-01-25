@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <div class="border-b p-2">
        <a href="{{ url('/' . $post->user->name) }}" class="text-xl dark:text-white">{{ $post->user->name }}</a>
        <p class="text-xl dark:text-white">{{ $post->text }}</p>
        @if (auth()->user()->id == 1 || $post->user_id == auth()->user()->id)
            <div class="my-2">
                <a href="{{ url('/chirp/' . $post->id) . '/edit' }}" class="p-2 text-gray-500 bg-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">edit post</a>
                <a href="{{ url('/chirp/' . $post->id) . '/delete' }}" class="p-2 text-gray-500 bg-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">delete post</a>
            </div>
        @endif
    </div>
@endsection
