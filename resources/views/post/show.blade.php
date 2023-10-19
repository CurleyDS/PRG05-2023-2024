@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="p-4 sm:ml-64">
    <h2>Post:</h2>
    <p>{{ $post['user_id'] }}</p>
    <p>{{ $post['text'] }}</p>
</div>
@endsection
