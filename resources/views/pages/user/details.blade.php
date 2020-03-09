@extends('layouts.app')
@section('content')
    <div class="row">         
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header d-flex align-items-center">
                    <div class="d-flex justify-content-center col">
                        <div class="h4 m-0 text-center">User Details</div>
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
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail1">Username</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputContact1" type="text" placeholder="" value="Hawa12" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputContact2">Firstname</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputContact2" type="email" value="Hawa" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail3">Lastname</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputDetail3" type="text" value="Ally" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail4">Email</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputDetail4" type="text" value="demo@gmail.com" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail5">Office Name</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputDetail5" type="text" value="Head office" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail6">Staff Name</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputDetail6" type="text" value="demo" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail7">Client Name</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputDetail7" type="text" value="Kasuma" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label text-right" for="inputDetail8">System defined</label>
                                    <div class="col-xl-10 col-md-9 col-8"><input class="form-control" id="inputDetail8" type="text" placeholder="" /></div>
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
