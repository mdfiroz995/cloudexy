@php $title = "Cloudexy Login" @endphp
@extends('frontend.layouts.main')
@section('main-container')
<x-front-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <h1 class="font-bold text-center text-4xl text-yellow-500">User <span class="text-blue-500">Login</span></h1>
                {{-- <img src="{{ asset('images/user.png') }}" height="100"  width="100" alt=""> --}}
            </a>
            {{-- Front Login --}}
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4" style="display:flex; justify-content:space-between;">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="ml-2 text-sm text-gray-600" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Register Here?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-front-guest-layout>
@endsection
<style>
    .min-h-screen.flex.flex-col.items-center.pt-6{
        background-color: aliceblue;
        /* height: 630px; */
    }
    .container.mt-3{
        margin-top: 0px !important;
    }
    .min-h-screen {
    min-height: 80vh !important;
}
</style>
