@extends('layouts.app')

@section('title')
    Chirper
@endsection

@section('content')
<div class="p-4 sm:ml-64">
    <form method="POST" action="{{ url('/chirp/delete') }}">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <input type="hidden" name="post" value="{{ $post['id'] }}">
                <h1 class="text-base font-semibold leading-7 text-gray-900">Are you sure you want to delete this post?</h1>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm">
                    Delete post
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
