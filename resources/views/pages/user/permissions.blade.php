@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Users Permission

        </div>
    </div>
    <!-- START row-->
    <div class="row">

        <div class="col-xl-6">
            <!-- START card-->
            <div class="card card-default">
                {{-- ?<div class="card-header">Basic Table</div> --}}
                <div class="card-body">
                    <!-- START table-responsive-->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Has Access</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END table-responsive-->
                </div>
            </div>
            <!-- END card-->
            <div> <a href="/user/roles"><button  class="btn btn-primary"><i class="fas fa-arrow-left" style="color:white">&nbsp;Back</i></button></a></div>
        </div>
    </div>
    <!-- END row-->

@endsection
@section('styles')@endsection
@section('scripts')@endsection
