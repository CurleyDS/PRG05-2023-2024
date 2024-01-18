@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <div class="border-b p-2">
        <p class="text-xl dark:text-white">Hello {{ $user->name }}</p>
        <a href="{{ url('/chirp') }}" class="p-2 text-gray-500 bg-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">Create a chirp</a>
    </div>
    @foreach($posts as $post)
        <div class="border-b p-2">
            <a href="{{ url('/' . $post->user->name) }}" class="text-xl dark:text-white">{{ $post->user->name }}</a>
            <a href="{{ url('/chirp/' . $post->id) }}">
                <p class="dark:text-white">{{ $post->text }}</p>
            </a>
        </div>
    @endforeach
@endsection
