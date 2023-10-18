@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="container">
    <div class="grid grid-rows-2 grid-flow-col pt-10 text-center">
        <h1 class="grid place-content-center row-span-2 p-2 font-bold text-3xl underline">
            Chirper
        </h1>
        <a href="{{ route('login') }}" class="grid place-content-center p-2">Sign in</a>
        <a href="{{ route('register') }}" class="grid place-content-center p-2">Create account</a>
    </div>
</div>
@endsection
