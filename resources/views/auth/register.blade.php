@extends('layouts.user')
@section('content')
    <div class="block-center mt-4 wd-xl">
        <!-- START card-->
        <div class="card card-flat">
            <div class="card-header text-center bg-dark text-white">
                SAMIS - MICROFINANCE
                {{--<a href="#"><img class="block-center" src="img/logo.png" alt="Image" /></a>--}}
            </div>
            <div class="card-body">
                <p class="text-center py-2">SIGNUP TO GET </p>
                <form action="{{route('register')}}" method="POST" class="mb-3" id="registerForm" novalidate="novalidate">
                    @csrf
                    <div class="form-group">
                        <label class="text-muted" for="name">Full Name</label>
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" type="text" placeholder="Enter Your Name" autocomplete="off" required="required" />
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-user"></em></span>
                            </div>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="email">Email address</label>
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" placeholder="Enter email" autocomplete="off" required="required" />
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-envelope"></em></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="password">Password</label>
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0  @error('password') is-invalid @enderror" name="password" autocomplete="new-password" id="password" type="password" placeholder="Password"  required="required" />
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="password-confirm">Retype Password</label>
                        <div class="input-group with-focus">
                            <input
                                    class="form-control border-right-0"
                                    id="password-confirm"
                                    type="password"
                                    placeholder="Retype Password"
                                    autocomplete="off"
                                    required="required"
                                    data-parsley-equalto="#password"
                            />
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox c-checkbox mt-0">
                        <label>
                            <input type="checkbox" value="" required="required" name="agreed" />
                            <span class="fa fa-check"></span>
                            I agree with the
                            <a class="ml-1" href="#">terms</a>
                        </label>
                    </div>
                    <button class="btn btn-block btn-primary mt-3" type="submit">Create account</button>
                </form>
                <p class="pt-3 text-center">Have an account?</p>
                <a class="btn btn-block btn-secondary" href="{{route('login')}}">Login</a>
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
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                                {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

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
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
