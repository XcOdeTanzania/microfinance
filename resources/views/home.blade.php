@extends('layouts.app')

@section('content')

    <div class="content-heading">
        <div>
            SAMIS
            <small data-localize="dashboard.WELCOME"> Microfinance Records</small>
        </div>
        <!-- START Language list-->
        <div class="ml-auto">
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown">English</button>
                <div class="dropdown-menu dropdown-menu-right-forced animated fadeInUpShort" role="menu">
                    <a class="dropdown-item" href="#" data-set-lang="en">English</a>
                    <a class="dropdown-item" href="#" data-set-lang="es">Swahili</a>
                </div>
            </div>
        </div>
        <!-- END Language list-->
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- START card-->
            <div class="card bg-info-light pt-2 b0">
                <div class="px-2">
                    <em class="icon-people fa-lg float-right"></em>
                    <div class="h2 mt-0">150</div>
                    <div class="text-uppercase">Clients</div>
                </div>
                <div
                        data-sparkline=""
                        data-type="line"
                        data-width="100%"
                        data-height="75px"
                        data-line-color="#23b7e5"
                        data-chart-range-min="0"
                        data-fill-color="#23b7e5"
                        data-spot-color="#23b7e5"
                        data-min-spot-color="#23b7e5"
                        data-max-spot-color="#23b7e5"
                        data-highlight-spot-color="#23b7e5"
                        data-highlight-line-color="#23b7e5"
                        data-values="2,5,3,7,4,5"
                        style="margin-bottom: -2px"
                        data-resize="true"
                ></div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <!-- START card-->
            <div class="card bg-purple-light pt-2 b0">
                <div class="px-2">
                    <em class=" fa fa-hand-holding-usd fa-lg float-right"></em>
                    <div class="h2 mt-0">
                        78
                        <span class="text-sm text-white">Active Loans</span>
                    </div>
                    <div class="text-uppercase">Loans</div>
                </div>
                <div
                        data-sparkline=""
                        data-type="line"
                        data-width="100%"
                        data-height="75px"
                        data-line-color="#7266ba"
                        data-chart-range-min="0"
                        data-fill-color="#7266ba"
                        data-spot-color="#7266ba"
                        data-min-spot-color="#7266ba"
                        data-max-spot-color="#7266ba"
                        data-highlight-spot-color="#7266ba"
                        data-highlight-line-color="#7266ba"
                        data-values="1,4,5,4,8,7,10"
                        style="margin-bottom: -2px"
                        data-resize="true"
                ></div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-12">
            <!-- START card-->
            <div class="card bg-purple-light pt-2 b0">
                <div class="px-2">
                    <em class=" fa fa-chart-line fa-lg float-right"></em>
                    <div class="h2 mt-0">7</div>
                    <div class="text-uppercase">Shares</div>
                </div>
                <div
                        data-sparkline=""
                        data-type="line"
                        data-width="100%"
                        data-height="75px"
                        data-line-color="#7266ba"
                        data-chart-range-min="0"
                        data-fill-color="#7266ba"
                        data-spot-color="#7266ba"
                        data-min-spot-color="#7266ba"
                        data-max-spot-color="#7266ba"
                        data-highlight-spot-color="#7266ba"
                        data-highlight-line-color="#7266ba"
                        data-values="1,3,4,5,7,8"
                        style="margin-bottom: -2px"
                        data-resize="true"
                ></div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-12">
            <!-- START card-->
            <div class="card bg-info-light pt-2 b0">
                <div class="px-2">
                    <em class="icon-bubbles fa-lg float-right"></em>
                    <div class="h2 mt-0">500</div>
                    <div class="text-uppercase">Reviews</div>
                </div>
                <div
                        data-sparkline=""
                        data-type="line"
                        data-width="100%"
                        data-height="75px"
                        data-line-color="#23b7e5"
                        data-chart-range-min="0"
                        data-fill-color="#23b7e5"
                        data-spot-color="#23b7e5"
                        data-min-spot-color="#23b7e5"
                        data-max-spot-color="#23b7e5"
                        data-highlight-spot-color="#23b7e5"
                        data-highlight-line-color="#23b7e5"
                        data-values="4,5,3,10,7,15"
                        style="margin-bottom: -2px"
                        data-resize="true"
                ></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-12">
            <!-- START card-->
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="text-muted mt-0">300</h3>
                        <em class="ml-auto text-muted fa fa-coins fa-2x"></em>
                    </div>
                    <div
                            class="py-4"
                            data-sparkline=""
                            data-type="line"
                            data-height="80"
                            data-width="100%"
                            data-line-width="2"
                            data-line-color="#7266ba"
                            data-spot-color="#888"
                            data-min-spot-color="#7266ba"
                            data-max-spot-color="#7266ba"
                            data-fill-color=""
                            data-highlight-line-color="#fff"
                            data-spot-radius="3"
                            data-values="1,3,4,7,5,9,4,4,7,5,9,6,4"
                            data-resize="true"
                    ></div>
                    <p class="m-4">
                        Loans
                    </p>
                </div>
            </div>
            <!-- END card-->
        </div>
        <div class="col-xl-9">
            <div class="row ">

            </div>
        </div>
    </div>





@endsection

@section('scripts')
    <script src="{{ asset('angle/js/sparkline.js') }}"></script>
    <script src="{{ asset('angle/js/easypiechart.js') }}"></script>
    <script src="{{ asset('angle/js/flot.js') }}"></script>
    <script src="{{ asset('angle/js/vector.map.js') }}"></script>
    <script src="{{ asset('angle/js/vector.map.demo.js') }}"></script>
@endsection