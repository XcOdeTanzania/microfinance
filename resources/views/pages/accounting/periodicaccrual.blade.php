@extends('layouts.app')
@section('content')

    <!-- START card-->
        <div class="card card-default">
            <div class="content-heading "><h2>Periodic Accrual</h2></div>
       <div class="card-body">
          <form class="form-horizontal" method="get" action="/">
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Transaction From</label>
                   <div class="col-md-5"><input class="form-control" id="input-id-1" type="date"></div>

             </fieldset>
             <fieldset>
                <div><a href="#"><button class="btn btn-primary" type="excute"><span class="fas fa-check">&nbsp; </span>Excute</button></a></div>
             </fieldset>

          </form>
    </div><!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection
