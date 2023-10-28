@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="col-span-2 p-4">
    User profile: {{ $user->name }}
</div>
@endsection
