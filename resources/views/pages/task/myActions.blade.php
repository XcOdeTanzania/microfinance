@extends('layouts.app')
@section('content')
<my-action-task></my-action-task>

    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    <script src="{{ asset('angle/js/forms.js') }}"></script>
    <script src="{{ asset('angle/js/select2.js') }}"></script>
