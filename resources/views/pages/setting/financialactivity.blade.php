@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Financial Activity
<small>Use this setting to specify in which GL Account financial activity of certain type should be registered</small>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="table-responsive bootgrid">
                <table class="table table-striped" id="bootgrid-command">
                    <thead>
                        <tr>
                            <th >Financial Activity</th>
                            <th >GL Account</th>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asset Transfer</td>
                            <td>
                                <div class="form-group">
                                <select name="accounttype" class="form-control" id="accounttype">
                                    <option >Select</option>
                                    <option></option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                        </td>

                        </tr>
                        <tr>
                            <td>Liability Transfer</td>
                            <td>
                                <div class="form-group">
                                    <select name="accounttype" class="form-control" id="accounttype">
                                        <option >Select</option>
                                        <option></option>
                                        <option> </option>
                                        <option> </option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Cash At Main Vault</td>
                            <td>
                                <div class="form-group">
                                    <select name="accounttype" class="form-control" id="accounttype">
                                        <option >Select</option>
                                        <option></option>
                                        <option> </option>
                                        <option> </option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <button  class="btn btn-primary" type="submit" data-dismiss="modal"><em class="fa mr-2 fa-check"></em>Save</button>
            </div>
        </div>
    </div>
    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    @endsection
