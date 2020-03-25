<template>
    <div>
        <div class="content-heading">
            <div>
                Pending Approval
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
                    <table class="table table-striped my-4 w-100" id="pendingApproval">
                        <thead>
                        <tr>
                            <th data-priority="1">Client Id</th>
                            <th>Display Name</th>
                            <th>Group Name</th>
                            <th>Branch</th>
                            <th>Loan Officer</th>
                            <th>Registration Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="client in clients" :key="client.id" >
                            <td>{{client.id}}</td>
                            <td>{{client['profile'].first_name + ' '+ client['profile'].last_name}}</td>
                            <td></td>
                            <td> {{client['branch'].name}} </td>
                            <td>Mr. JPM</td>
                            <td>{{client.registration_date}}</td>
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
    export default{
        name:'pending-approval-clients',
        data(){
            return {clients:[]}
        },
        methods:{
            getClients(){

                Container.resolve('clients').then((data)=>{
                    this.clients = data.clients;
                    console.log(this.clients);
                });
            }
        },
        mounted(){
            this.getClients()
        }

    }

</script>