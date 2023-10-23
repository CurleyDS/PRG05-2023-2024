@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="p-4 sm:ml-64">
    User profile: {{ $user->name }}
</div>
@endsection
