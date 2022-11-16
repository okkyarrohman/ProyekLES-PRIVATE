@extends('layouts.index-admin')
@section('index-admin')
    ;
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" value="{{ __('Name') }}"></label>
                            <input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}"></label>
                            <input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="password" value="{{ __('Password') }}"></label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
                            <input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Masukkan Kembali Password">
                        </div>
                        <div class="form-group form-button">
                            <button class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms" required />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="login-regist/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
@endsection
