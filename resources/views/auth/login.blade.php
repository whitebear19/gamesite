@extends('layouts.auth')

@section('content')
    <div class="auth_body">
        <div class="">
            <label for="" class="auth_body_title">
                Login
            </label>
        </div>
        <div class="line text-right pos_rel" style="display: none;">   
            <hr>         
            <a href="{{ route('register') }}" class="auth_which">
                Create new account
            </a>
        </div>
        <div class="auth_with_social d-flex" style="display: none!important;">
            <div class="mr-auto">
                <label for="">
                    Login with a social network account
                </label>
            </div>
            <div class="social_item">
                
                <a href="">
                    <img class="social_icon" src="{{asset('public/assets/img/google.png')}}" alt="">
                </a>
            
                <a href="">
                    <img class="social_icon" src="{{asset('public/assets/img/facebook.png')}}" alt="">
                </a>
                  
            </div>
        </div>
        <br><br>
        <div class="native-login-block" style="display: none;">
            <div class="native-login-space-left"></div>
            <div class="native-login-text">
                <span>Or sign in with</span>
            </div>
            <div class="native-login-space-right"></div>
        </div>
        <br>
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div>
                <div class="text-field">
                    <label class="label">                   
                        {{ __('Email') }}
                    </label>
                   
                    <div class="input-base">                        
                        <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-field">
                    <label class="label">                   
                        {{ __('Password') }}
                    </label>
                    <div class="input-base">
                        <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center mt-20 d-flex" style="justify-content: space-between;">
                    <button class="btn_auth">Login</button>
                    <a href="{{ route('register') }}" class="">
                        Create an account
                    </a>
                </div>
            </div>
        </form>
        <br>
        <div class="text-right">            
            @if (Route::has('password.request'))
                <a class="" style="float:right;" href="{{ route('password.request') }}">
                    <b class="text-color-blue">{{ __('Forgot password') }}</b>
                </a>
            @endif
        </div>
        <br>
        <div class="mt-4">
            <p class="fs-14">
                By logging in, you agree to the account's <a href="">Terms of Service</a>. View <a href="">Privacy Policy</a>.
            </p>
        </div>
    </div>
@endsection
