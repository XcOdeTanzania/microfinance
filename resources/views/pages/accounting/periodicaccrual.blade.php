@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content-heading">
        <h2>Periodic Accrual</h2>
    </div>
    <!-- START card-->
    <div class="card card-default">
       
       <div class="card-body">
          <form class="form-horizontal" method="get" action="/">
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Transaction From</label>
                   <div class="col-md-10"><input class="form-control" id="input-id-1" type="date"></div>
                
             </fieldset>
             <fieldset>
                <div><button class="btn btn-primary" type="excute"><span class="fas fa-check">&nbsp; </span>Excute</button></div>
             </fieldset>
             
          </form>
       </div>
    </div><!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection