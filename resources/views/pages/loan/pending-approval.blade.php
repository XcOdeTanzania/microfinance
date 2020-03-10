@extends('layouts.app');
@section('content')
        <div class="content-heading">
            <div>Pending Approval</div>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped my-4 w-100" id="datatable2">
                        <thead>
                            <tr>
                                <th>Account Nbr</th>
                                <th>Branch</th>
                                <th>Loan Officer</th>
                                <th>Client Name</th>
                                <th>Group Name</th>
                                <th>Amount</th>
                                <th>Created Date</th>
                                <th>Product Name</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr>
                            <td>000000086</td>
                            <td>Sub Branch 1</td>
                            <td>Officer 1, Loan</td>
                            <td>John Winston Drake</td>
                            <td>Blessed</td>
                            <td>40,000.00</td>
                            <td>05-03-2020</td>
                            <td>Declining - Accrual</td>
                            <td>
                            <a href="{{ route('loan.pending', 86) }}">
                                    <button class="btn btn-primary btn-mini">
                                        <i class="icon-white icon-eye-open">
                                            &nbsp;View
                                        </i>
                                    </button>
                                </a>
                            </td>
                         </tr>
                         <tr>
                            <td>000000086</td>
                            <td>Sub Branch 1</td>
                            <td>Officer 1, Loan</td>
                            <td>John Winston Drake</td>
                            <td>Blessed</td>
                            <td>40,000.00</td>
                            <td>05-03-2020</td>
                            <td>Declining - Accrual</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-primary btn-mini">
                                        <i class="icon-white icon-eye-open">
                                            &nbsp;View
                                        </i>
                                    </button>
                                </a>
                            </td>
                         </tr>
                         <tr>
                            <td>000000086</td>
                            <td>Sub Branch 1</td>
                            <td>Officer 1, Loan</td>
                            <td>John Winston Drake</td>
                            <td>Blessed</td>
                            <td>40,000.00</td>
                            <td>05-03-2020</td>
                            <td>Declining - Accrual</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-primary btn-mini">
                                        <i class="icon-white icon-eye-open">
                                            &nbsp;View
                                        </i>
                                    </button>
                                </a>
                            </td>
                         </tr>
                         <tr>
                            <td>000000086</td>
                            <td>Sub Branch 1</td>
                            <td>Officer 1, Loan</td>
                            <td>John Winston Drake</td>
                            <td>Blessed</td>
                            <td>40,000.00</td>
                            <td>05-03-2020</td>
                            <td>Declining - Accrual</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-primary btn-mini">
                                        <i class="icon-white icon-eye-open">
                                            &nbsp;View
                                        </i>
                                    </button>
                                </a>
                            </td>
                         </tr>
                         <tr>
                            <td>000000086</td>
                            <td>Sub Branch 1</td>
                            <td>Officer 1, Loan</td>
                            <td>John Winston Drake</td>
                            <td>Blessed</td>
                            <td>40,000.00</td>
                            <td>05-03-2020</td>
                            <td>Declining - Accrual</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-primary btn-mini">
                                        <i class="icon-white icon-eye-open">
                                            &nbsp;View
                                        </i>
                                    </button>
                                </a>
                            </td>
                         </tr>
                         
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection