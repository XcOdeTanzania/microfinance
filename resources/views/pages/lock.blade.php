@extends('layouts.user')
@section('content')
    <div class="abs-center col-xl-4 col-md-7 col-sm-8 col-10">
        <!-- START card-->
        <div class="d-flex justify-content-center">
            <div class="p-2"><img class="img-fluid img-thumbnail rounded-circle" src="{{asset('angle/img/user/02.jpg')}}" alt="Avatar" width="60" height="60" /></div>
        </div>
        <div class="card b0">
            <div class="card-body">
                <p class="text-center">Please login to unlock your screen.</p>
                <form>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="email" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0" id="password" type="password" placeholder="Enter Password" autocomplete="off" required="required" />
                            <div class="input-group-append">
                                <span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mt-1">
                            <a class="text-muted" href="{{ route('password.request') }}"><small>Forgot your password?</small></a>
                        </div>
                        <div class="ml-auto"><a class="btn btn-sm btn-primary" href="{{route('home')}}">Unlock</a></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END card-->
        @include("layouts.includes.footer-page")
    </div>
@endsection
