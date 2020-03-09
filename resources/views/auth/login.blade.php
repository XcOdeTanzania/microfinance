@extends('layouts.user')
@section('content')
    <div class="block-center mt-4 wd-xl">
        <!-- START card-->
        <div class="card card-flat">
            <div class="card-header text-center bg-dark text-white">
                SAMIS - MICROFINANCE
                {{--<a href="#"><img class="block-center rounded" src="img/logo.png" alt="Image"/></a>--}}
            </div>
            <div class="card-body">
                <p class="text-center py-2">SIGN IN TO CONTINUE.</p>
                <form class="mb-3" id="loginForm" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email"  type="email"
                                   placeholder="Enter email" autocomplete="off" required="required"/>
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em
                                            class="fa fa-envelope"></em></span>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0 @error('password') is-invalid @enderror"  autocomplete="current-password" id="password" name="password" type="password"
                                   placeholder="Password" required="required"/>
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em
                                            class="fa fa-lock"></em></span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="checkbox c-checkbox float-left mt-0">
                            <label>
                                <input type="checkbox" value="" name="remember"/>
                                <span class="fa fa-check"></span>
                                Remember Me
                            </label>
                        </div>
                        <div class="float-right"><a class="text-muted" href="{{ route('password.request') }}">Forgot
                                your password?</a></div>
                    </div>
                    <button class="btn btn-block btn-primary mt-3" type="submit">Login</button>
                </form>
                <p class="pt-3 text-center">Need to Signup?</p>
                <a class="btn btn-block btn-secondary" href="{{route('register')}}">Register Now</a>
            </div>
        </div>
        <!-- END card-->
        @include("layouts.includes.footer-page")
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('angle/js/pages.js') }}"></script>
@endsection



{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Login') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('login') }}">--}}
{{--@csrf--}}

{{--<div class="form-group row">--}}
{{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--@error('email')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--@error('password')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<div class="form-check">--}}
{{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--<label class="form-check-label" for="remember">--}}
{{--{{ __('Remember Me') }}--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-8 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Login') }}--}}
{{--</button>--}}

{{--@if (Route::has('password.request'))--}}
{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--{{ __('Forgot Your Password?') }}--}}
{{--</a>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
