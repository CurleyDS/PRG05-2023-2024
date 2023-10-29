@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="col-span-2 p-4">
    User profile: {{ $user->name }}
    <h2>Posts:</h2>
    @foreach($user->posts as $post)
    <p><a href="{{ url('/chirp/' . $post['id']) }}">{{ $post['text'] }}</a></p>
    @endforeach
</div>
@endsection
