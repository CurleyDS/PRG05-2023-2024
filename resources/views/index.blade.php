@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <h1 class="grid place-content-center row-span-2 p-2 font-bold text-3xl underline">
                    Chirper
                </h1>
                <a href="{{ route('login') }}" class="grid place-content-center p-2">Sign in</a>
                <a href="{{ route('register') }}" class="grid place-content-center p-2">Create account</a>
            </section>
        </div>
    </div>
</main>
@endsection
