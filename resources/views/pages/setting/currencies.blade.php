@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Currencies
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
<form action="post" type='checkbox'>

    <fieldset>

        <div class="form-group row">
            <label class="col-md-2 col-form-label"><b> AVAILABLE CURRENCIES</b></label>
            <div class="col-md-10">
                <div class="checkbox c-checkbox">
                    <label>
                        <input type="checkbox" value="" />
                        <span class="fa fa-check"></span>
                         Tanzanian Shilling (TZS)
                    </label>
                </div>
                <div class="checkbox c-checkbox">
                    <label>
                        <input type="checkbox" checked="" value="" />
                        <span class="fa fa-check"></span>
                        US Dollar ($)
                    </label>
                </div>
                <div class="checkbox c-checkbox">
                    <label>
                        <input type="checkbox" value="" />
                        <span class="fa fa-check"></span>
                         Kenyan Shilling (Ksh)
                    </label>
                </div>
                <div class="checkbox c-checkbox">
                    <label>
                        <input type="checkbox"  value="" />
                        <span class="fa fa-check"></span>
                        Ugandan  Shilling (Ush)
                    </label>
                </div>

            </div>
        </div>
    </fieldset>
</form>
    </div>
    @endsection
    @section('styles')@endsection
    @section('scripts')
