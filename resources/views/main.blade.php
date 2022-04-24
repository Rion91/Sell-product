@extends('MasterLayout.layout')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block position-absolute top-0 end-0">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-primary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-primary">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">PHP Laravel Project</h1>
            <p>Welcome to my web site</p>
            <p>You can sell everything you want</p>
            {{-- <a href="product" class="btn btn-outline-primary">Show Products</a> --}}
        </div>
    </div>
</div>
@endsection