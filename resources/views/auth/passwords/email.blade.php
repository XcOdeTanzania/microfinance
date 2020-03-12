@extends('layouts.user')

@section('content')

    <div class="block-center mt-4 wd-xl">
        <!-- START card-->
        <div class="card card-flat">
            <div class="card-header text-center bg-dark">
                <a href="#"><img class="block-center rounded" src="{{asset('angle/img/logo.png')}}" alt="Image" /></a>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="text-center py-2">PASSWORD RESET</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <p class="text-center">Fill with your mail to receive instructions on how to reset your password.</p>
                    <div class="form-group">
                        <label class="text-muted" for="resetInputEmail1">Email address</label>
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0 @error('email') is-invalid @enderror"  id="resetInputEmail1" value="{{ old('email') }}" required autocomplete="email" name="email" type="email" placeholder="Enter email"  />
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
                    <button class="btn btn-danger btn-block" type="submit">Send Reset Link</button>
                </form>
            </div>
        </div>
        <!-- END card-->
    </div>
@endsection
