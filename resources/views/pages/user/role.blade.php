@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header d-flex align-items-center">
                    <div class="d-flex justify-content-center col">
                        <div class="h4 m-0 text-center">Role</div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row py-4 justify-content-center">
                        <div class="col-12 col-sm-10">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="roleName">Name</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="roleName" type="text" placeholder="" value="Hawa12" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="roleDetail">Description</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="roleDetail" type="text" value="Head Office" /></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')@endsection
@section('scripts')@endsection
