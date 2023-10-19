@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="p-4 sm:ml-64">
    <h2>Hello {{ $user['name'] }}</h2>
    <h2>Posts:</h2>
    @foreach($posts as $post)
    <a href="{{ url('/' . $post['id']) }}">{{ $post['text'] }}</a>
    @endforeach
</div>
@endsection
