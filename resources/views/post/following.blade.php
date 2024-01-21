@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <div class="flex justify-between border-b">
        <div class="p-2 w-full text-center">
            <a href="{{ url('/') }}" class="rounded-lg p-2 bg-gray-900 text-xl dark:text-white">Home</a>
        </div>
        <div class="border-b-4 p-2 w-full text-center">
            <a href="{{ url('/following') }}" class="rounded-lg p-2 bg-gray-900 text-xl dark:text-white">Following</a>
        </div>
    </div>
    <div class="border-b p-2">
        <p class="p-2 text-xl dark:text-white">Hello {{ $user->name }}</p>
        <a href="{{ url('/chirp') }}" class="p-2 text-gray-500 bg-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">Create a chirp</a>
    </div>
    @if ($followReq)
        @foreach($posts as $post)
            <div class="border-b p-2">
                <a href="{{ url('/' . $post->user->name) }}" class="text-xl dark:text-white">{{ $post->user->name }}</a>
                <a href="{{ url('/chirp/' . $post->id) }}">
                    <p class="dark:text-white">{{ $post->text }}</p>
                </a>
            </div>
        @endforeach
    @else
        <div class="border-b p-5">
            <p class="text-center text-xl dark:test-white">You need to follow at least 5 users!</p>
        </div>
    @endif
@endsection
