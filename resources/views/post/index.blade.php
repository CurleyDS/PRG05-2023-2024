@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="col-span-2 p-4">
    <h2>Hello {{ $user['name'] }}</h2>
    <a href="{{ url('/chirp') }}">Create a chirp</a>
    <h2>Posts:</h2>
    @foreach($posts as $post)
    <p><a href="{{ url('/chirp/' . $post['id']) }}">{{ $post['text'] }}</a></p>
    @endforeach
</div>
@endsection
