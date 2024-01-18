@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <h2>Search Results:</h2>
    <a href="{{ url()->current() . '?search=' . $search }}">All</a>
    <a href="{{ url()->current() . '?search=' . $search . '&filter=users' }}">Users</a>
    <a href="{{ url()->current() . '?search=' . $search . '&filter=posts' }}">Posts</a>

    @if (request()->filter != 'posts')
        @foreach($searchUsers as $user)
            <p>
                <a href="{{ url('/' . $user->name) }}">{{ $user->name }}</a>
            </p>
        @endforeach
    @endif

    @if (request()->filter != 'users')
        @foreach($searchPosts as $post)
            <p>
                <a href="{{ url('/chirp/' . $post->id) }}">{{ $post->text }}</a>
            </p>
        @endforeach
    @endif

    {{ $searchPosts->appends(request()->input())->links() }}
@endsection
