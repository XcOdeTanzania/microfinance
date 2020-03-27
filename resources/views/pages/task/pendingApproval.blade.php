@extends('layouts.app')
@section('content')
    <pending-approval-task></pending-approval-task>


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



