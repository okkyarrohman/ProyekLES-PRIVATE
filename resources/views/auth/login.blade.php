@extends('layouts.index-admin')
@section('index-admin')
    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="login-regist/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}"></label>
                                <input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>
                            <div class="form-group">
                                <label for="password" value="{{ __('Password') }}"></label>
                                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                    autocomplete="current-password" />
                            </div>
                            <div class="form-group">
                                <label for="remember_me" class="flex items-center">
                                    <checkbox id="remember_me" name="remember"></checkbox>
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                <div class="btn">
                                    <button class="btn btn-primary">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                        </form>
                        <div class="button-google">
                            <a class="btn btn-info" href="{{ route('google.login') }}">Login Google</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
