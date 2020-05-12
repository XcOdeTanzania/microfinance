@extends('layouts.app')
@section('content')
    <!-- DATATABLE -->
    <user-roles></user-roles>
    <button id="showRoleDetail" type="button" class="btn btn-primary" data-toggle="modal" data-target="#roleDetailModal" data-role="role">
        Details
    </button>
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    <script>
        $('#roleDetailModal').on('show.bs.modal', function (e) {
            var button = $('#showRoleDetail');
            var role = button.data('role');
            console.log(role);
            $(this).find("#roleName").val = role['name'];
            $(this).find("#roleName").val(role['name']);
            $(this).find("#roleDetail").val(role['description']);

        });
    </script>
@endsection
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="roleDetailModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label " for="roleName">Name</label>
                        <div class="col-xl-10 col-md-9 col-8"><input class="form-control" readonly id="roleName" type="text" placeholder="" value="Hawa12" /></div>
                    </div>
                    <div class="form-group row">
                        <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label " for="roleDetail">Description</label>
                        <div class="col-xl-10 col-md-9 col-8"><input class="form-control" readonly id="roleDetail" type="text" value="Head Office" /></div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>