@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <div class="border-b p-2">
        <p class="text-xl dark:text-white">{{ $user->name }}</p>
    </div>
    @foreach($user->posts as $post)
        <div class="border-b p-2">
            <a href="{{ url('/chirp/' . $post['id']) }}">{{ $post['text'] }}</a>
        </div>
    @endforeach
@endsection
