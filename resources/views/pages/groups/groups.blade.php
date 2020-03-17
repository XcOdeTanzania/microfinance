@extends('layouts.app')
@section('content')

    <div class="content-heading ">Groups</div>
    <!-- START card-->
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="groups-tab" data-toggle="tab" href="#groups" role="tab" aria-controls="groups" aria-selected="true">Groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="closed-tab" data-toggle="tab" href="#closed" role="tab" aria-controls="closed" aria-selected="false">Closed Groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pending-approval-tab" data-toggle="tab" href="#pending-approval" role="tab" aria-controls="pending-approval" aria-selected="false">Pending Approval</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="groups" role="tabpanel" aria-labelledby="groups-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Branch</label>
                                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                                            <option >Select</option>
                                            @foreach ($branches as $branch)
                                                <option>{{ $branch->name }}</option>
                                            @endforeach
                                        </select></div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Loan Office</label>
                                    <div class="col-md-6"><select name="accounttag" class="form-control" id="accountag">
                                            <option >Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select></div>
                                </div>
                                <br>
                                <div><button class="btn btn-primary" type="filter">Search</button></div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="closed" role="tabpanel" aria-labelledby="closed-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Branch</label>
                                    <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                                            <option >Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select></div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Loan Office</label>
                                    <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                                            <option >Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select></div>
                                </div>
                                <br>
                                <div><button class="btn btn-primary" type="filter">Search</button></div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pending-approval" role="tabpanel" aria-labelledby="pending-approval-tab">
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Branch</label>
                                    <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                                            <option >Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select></div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Loan Office</label>
                                    <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                                            <option >Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select></div>
                                </div>
                                <br>
                                <div><button class="btn btn-primary" type="filter">Search</button></div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
        <!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection

