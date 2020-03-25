@extends('layouts.app')
@section('content')
    <loan-detail :loan="{{@json_encode($loan)}}"></loan-detail>
@endsection
@section('styles')@endsection
@section('scripts')
<script src="{{ asset('angle/js/datatable.js') }}"></script>
<script src="{{ asset('angle/js/wizard.js') }}"></script>
<script>

</script>
@endsection

<!-- Add charges Modal -->
<div class="modal fade" id="charges" tabindex="-1" role="dialog" aria-labelledby="chargesLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="chargesLabel">Add Charges</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Charge *</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Date *</label>
                        <input class="form-control" id="message-text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Amount *</label>
                        <input class="form-control" id="message-text">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
<!-- End charges Modal -->