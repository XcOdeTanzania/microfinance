@extends('layouts.app')

@section('content')
    <div class="content-heading">
       <div>Report Scheduler</div>
    </div>
    
    <div class="container-fluid">
      <!-- DATATABLE DEMO 3-->
      <div class="card">
        <!--<div class="card-header">
           <div class="card-title">Key Table</div>
           <div class="text-sm">KeyTable allows you to use keyboard navigation on a DataTables enhanced table, like an Excel spreadsheet.</div>
        </div> -->
        <div class="card-body">
           <table class="table table-striped my-4 w-100" id="datatable3">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Email Subject</th>
                    <th>Email Message</th>
                    <th>Start Date</th>
                    <th>Email Attachment File Format</th>
                    <th>Active</th>
                 </tr>
              </thead>
              <tbody>
              </tbody>
           </table>
        </div>
     </div>
   </div>
@endsection

@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection