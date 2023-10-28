@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="col-span-2 p-4">
    <h2>Post:</h2>
    <p>{{ $post['text'] }}</p>
    <a href="{{ url('/chirp/' . $post['id']) . '/edit' }}">edit post</a>
    <a href="{{ url('/chirp/' . $post['id']) . '/delete' }}">delete post</a>
</div>
@endsection
