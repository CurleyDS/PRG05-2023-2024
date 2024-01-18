@extends('layouts.app')

@section('title')
Chirper
@endsection

@section('content')
    <div class="border-b p-2">
        <form method="POST" action="{{ url('/chirp') }}">
            @csrf

            <div class="space-y-2">
                <div class="border-b border-gray-900/10">
                    <h1 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Chirp</h1>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8">
                        <div class="col-span-3">
                            <label for="text" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Post</label>

                            <div class="mt-2">
                                <textarea id="text" name="text" rows="4" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('text') is-invalid @enderror" placeholder="What is happening?" required>{{ old('text') }}</textarea>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm">
                        Post
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
