@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Actions Pending Approval
        </div>
    </div>
    
    <div class="card card-default">
        <div class="card-body">
        <div class= "col-xl-6 col-lg-6 col-md-10">
        <form>
            <div class="form-group row">
                <label for="user" class="col-md-2 col-form-label">User</label>
                <div class="col-md-10">
                    <select id="user" class="custom-select custom-select-sm" name="user">
                        <option selected="">Open this select menu</option>
                        <option value="1">Demo</option>
                        <option value="2">DemoUser</option>
                        <option value="3">0765342765</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="entity" class="col-md-2 col-form-label">Entity</label>
                <div class="col-md-10">
                    <select class="custom-select custom-select-sm" name="entity"  id="entity">
                        <option selected="">Open this select menu</option>
                        <option value="1">Group</option>
                        <option value="2">Client</option>
                        <option value="3">Account Transfer</option>
                        <option value="3">Journal Entry</option>
                        <option value="3">Loan</option>
                        <option value="3">Collection sheet</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="from" class="col-md-2 col-form-label mb-2">*From</label>
                <div class= "col-6">
                    <div class="input-group date" id="from">
                        <input class="form-control" type="text">
                        <span class="input-group-append input-group-addon">
                            <span></span>
                        </span>
                    </div>
                </div>
                <div class="col-4 input-group-prepend pb-1">
                    <input class="form-control " id="fromTimer" type="text" placeholder="00:00:00" aria-describedby="inputGroupPrepend3" required="">
                    <span class="input-group-text mb-1" id="inputGroupPrepend3"><i class="wi wi-time-3"></i></span>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="to" class="col-md-2 col-form-label mb-2">*To</label>
                <div class="col-6">
                    <div class="input-group date" id="to">
                        <input class="form-control" type="text">
                        <span class="input-group-append input-group-addon">
                            <span></span>
                        </span>
                    </div>
                </div>
                <div class="col-4 input-group-prepend pb-1">
                    <input class="form-control " id="toTimer" type="text" placeholder="00:00:00" aria-describedby="inputGroupPrepend3" required>
                    <span class="input-group-text  mb-1" id="inputGroupPrepend3"><i class="wi wi-time-3 "></i></span>
                </div>
            </div>
            <div class="row from-control">
            <div class="col-2"></div>
            <button class=" form-group btn btn-primary ml-3  " type="submit">Show</button>
            </div>
                    
         </form>
         </div>   
        </div>
    </div>


    <div class="card">
            <div class="card-header">
                <div class="card-title"></div>
                <div class="text-sm"></div>
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Action</th>
                            <th>Entity</th>
                            <th>Performed by</th>
                            <th>Office name</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Amount</th>
                            <th>Submitted on date</th>
                            <th>Effective date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="Received">
                            <td>Received</td>
                            <td>Group</td>
                            <td>Cashier</td>
                            <td>Kigamboni</td>
                            <td>Jane</td>
                            <td>WAMWA</td>
                            <td>500000</td>
                            <td>03/01/2019</td>
                            <td>20/02/2019</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
                  

    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    <script src="{{ asset('angle/js/forms.js') }}"></script>
    <script src="{{ asset('angle/js/select2.js') }}"></script>
    <script>
    $('#from').datepicker({
      orientation: 'bottom',
      icons: {
        time: 'fa fa-clock-o',
        date: 'fa fa-calendar',
        up: 'fa fa-chevron-up',
        down: 'fa fa-chevron-down',
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-crosshairs',
        clear: 'fa fa-trash'
      }
    }); 
    $('#to').datepicker({
      orientation: 'bottom',
      icons: {
        time: 'fa fa-clock-o',
        date: 'fa fa-calendar',
        up: 'fa fa-chevron-up',
        down: 'fa fa-chevron-down',
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-crosshairs',
        clear: 'fa fa-trash'
      }
    }); 
    </script>
    @endsection



