@extends('layouts.app');
@section('content')
<view-loans></view-loans>
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    <!-- <script>
         $('#viewloan').DataTable({
            'paging': true,
            // Table pagination
            'ordering': true,
            // Column ordering
            'info': true,
            // Bottom left status text
            responsive: true,
            // Text translation options
            // Note the required keywords between underscores (e.g _MENU_)
            oLanguage: {
                sSearch: 'Search all columns:',
                sLengthMenu: '_MENU_ records per page',
                info: 'Showing page _PAGE_ of _PAGES_',
                zeroRecords: 'Nothing found - sorry',
                infoEmpty: 'No records available',
                infoFiltered: '(filtered from _MAX_ total records)',
                oPaginate: {
                    sNext: '<em class="fa fa-caret-right"></em>',
                    sPrevious: '<em class="fa fa-caret-left"></em>'
                }
            },
            // Datatable Buttons setup
            dom: 'Bfrtip',
            buttons: [{
                extend: 'copy',
                className: 'btn-info'
            }, {
                extend: 'csv',
                className: 'btn-info'
            }, {
                extend: 'excel',
                className: 'btn-info',
                title: 'XLS-File'
            }, {
                extend: 'pdf',
                className: 'btn-info',
                title: 'PDF'//$('title').text()
            }, {
                extend: 'print',
                className: 'btn-info'
            }]
        });
    </script> -->
@endsection
