@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="col-span-2 p-4">
    <h2>Search Results:</h2>
    @foreach($searchPosts as $post)
    <p><a href="{{ url('/chirp/' . $post['id']) }}">{{ $post['text'] }}</a></p>
    @endforeach
    {{ $searchPosts->appends(request()->input())->links() }}
</div>
@endsection
