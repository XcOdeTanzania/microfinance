<template>
    <div>
        <div class="content-heading">
            <div>
                Closed Clients
                <small></small>
            </div>
        </div>
        <div class="container-fluid">
            <!-- DATATABLE DEMO 1-->
            <div class="card">
                <div class="card-header">
                    <div class="card-title"></div>
                    <div class="text-sm"></div>
                </div>
                <div class="card-body">
                    <table class="table table-striped my-4 w-100" id="closedClients">
                        <thead>
                        <tr>
                            <th data-priority="1">Client Id</th>
                            <th>Display Name</th>
                            <th>Group Name</th>
                            <th>Branch</th>
                            <th>Loan Officer</th>
                            <th>Closed On</th>
                            <th class="row justify-content-center" >View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>CL-002-2020</td>
                            <td>John Joseph</td>
                            <td>Alpha 1</td>
                            <td> M-City</td>
                            <td>Mr. JPM</td>
                            <td>20/01/2020</td>
                            <td>
                                <button class="btn btn-sm btn-primary ">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button></td>
                        </tr>

                        <tr>
                            <td>CL-002-2020</td>
                            <td>Ramadhan Athumani</td>
                            <td>individual</td>
                            <td> M-City</td>
                            <td>Mr. JPM</td>
                            <td>20/01/2020</td>
                            <td>
                                <button class="btn btn-sm btn-primary ">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button></td>
                        </tr>
                        <tr>
                            <td>CL-005-2020</td>
                            <td> Joseph John</td>
                            <td>individual</td>
                            <td> M-City</td>
                            <td>Mr. X</td>
                            <td>20/01/2020</td>
                            <td>
                                <button class="btn btn-sm btn-primary ">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    //    import datatable from '../../angle/modules/tables/datatable';
    import $ from 'jquery';
    export default{
        name:'closed',
        data(){
            return {}
        },
        methods:{

        },
        mounted(){


        }

    }

</script>