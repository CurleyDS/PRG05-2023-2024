@extends('layouts.app')

@section('content')
<div class="col-span-4 p-4">
    <div class="grid grid-rows-3 col-span-full pt-10">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h1 class="text-base font-semibold leading-7 text-gray-900">{{ __('Login') }}</h1>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                        <div class="col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Email Address') }}</label>

                            <div class="mt-2">
                                <input id="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-3">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Password') }}</label>

                            <div class="mt-2">
                                <input id="password" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-10 space-y-10">
                            <fieldset>
                                <div class="mt-6 space-y-6">
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input class="h-4 w-4 rounded border-gray-300 text-indigo-600" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </div>

                                        <div class="text-sm leading-6">
                                            <label class="font-medium text-gray-900" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-semibold leading-6 text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
