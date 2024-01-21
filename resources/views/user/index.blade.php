@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <div class="border-b p-2">
        <p class="text-xl dark:text-white">{{ $user->name }}</p>

        @if (auth()->check() && auth()->user()->id !== $user->id)
            <form action="{{ url('/' . $user->name) }}" method="POST">
                @csrf
                <input name="user_id" type="hidden" value="{{ $user->id }}">
                <button type="submit" class="rounded-full px-4 py-2 text-white {{ $isFollowing ? 'border border-blue-700 bg-gray-800' : 'bg-blue-700 hover:bg-blue-800' }}">{{ $isFollowing ? 'Following' : 'Follow' }}</button>
            </form>
        @endif
    </div>
    @foreach($user->posts as $post)
        <div class="border-b p-2">
            <a href="{{ url('/chirp/' . $post->id) }}">{{ $post->text }}</a>
        </div>
    @endforeach
@endsection
