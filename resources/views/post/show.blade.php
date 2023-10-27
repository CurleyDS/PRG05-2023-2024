@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="p-4 sm:ml-64">
    <h2>Post:</h2>
    <p>{{ $post['text'] }}</p>
    <a href="{{ url('/chirp/' . $post['id']) . '/edit' }}">edit post</a>
    <a href="{{ url('/chirp/' . $post['id']) . '/delete' }}">delete post</a>
</div>
@endsection
