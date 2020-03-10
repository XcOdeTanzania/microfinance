<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Bootstrap Admin App"/>
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" type="image/x-icon" href="{{asset('angle/favicon.ico')}}"/>

    <title>SAMIS MICROFINANCE</title>

    <!-- =============== VENDOR STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('angle/css/vendor.css') }}"/>
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('angle/css/bootstrap.css') }}"
          data-rtl="{{ asset('angle/css/bootstrap-rtl.css') }}" id="bscss"/>
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('angle/css/app.css') }}" data-rtl="{{ asset('angle/css/app-rtl.css') }}"
          id="maincss"/>
    @yield('styles')

</head>

<body>
<div class="wrapper ">


@if(Auth::user())
    <!-- top navbar-->
    @include('layouts.includes.header')
    <!-- sidebar-->
    @include('layouts.includes.sidebar')
@endif
<!-- offsidebar-->
@include('layouts.includes.offsidebar')
<!-- Main section-->
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </section>
    <!-- Page footer-->
    @include('layouts.includes.footer')
</div>
@yield('body-area')
<!-- =============== VENDOR SCRIPTS ===============-->
<script src="{{ asset('angle/js/manifest.js') }}"></script>
<script src="{{ asset('angle/js/vendor.js') }}"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="{{ asset('angle/js/app.js') }}"></script>
<!-- =============== CUSTOM PAGE SCRIPTS ===============-->
@yield('scripts')
</body>


</html>
