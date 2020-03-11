@extends('layouts.app')

@section('content')
    <div class="content-heading">
       <div>Client Reports</div>
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
                     <th>Category</th>
                     <th>Description</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>
                        <a href="#">Branch Client Numbers</a>
                     </td>
                     <td>
                        Client
                     </td>
                     <td>
                        Breaks down the clients in the system into different bands
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary">
                           <i class="fas fa-file"></i>
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <a href="#">Branch Client Numbers</a>
                     </td>
                     <td>
                        Client
                     </td>
                     <td>
                        Breaks down the clients in the system into different bands
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary">
                           <i class="fas fa-file"></i>
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <a href="#">Branch Client Numbers</a>
                     </td>
                     <td>
                        Client
                     </td>
                     <td>
                        Breaks down the clients in the system into different bands
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary">
                           <i class="fas fa-file"></i>
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <a href="#">Branch Client Numbers</a>
                     </td>
                     <td>
                        Client
                     </td>
                     <td>
                        Breaks down the clients in the system into different bands
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary">
                           <i class="fas fa-file"></i>
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <a href="#">Branch Client Numbers</a>
                     </td>
                     <td>
                        Client
                     </td>
                     <td>
                        Breaks down the clients in the system into different bands
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary">
                           <i class="fas fa-file"></i>
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <a href="#">Branch Client Numbers</a>
                     </td>
                     <td>
                        Client
                     </td>
                     <td>
                        Breaks down the clients in the system into different bands
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary">
                           <i class="fas fa-file"></i>
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
    </div>
@endsection

@section('scripts')
   <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection