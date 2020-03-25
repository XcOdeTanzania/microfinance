<template>
  <div>
      <div class="content-heading">
        <div>
            {{title}}
            <small>All load with in microfinance</small>
        </div>
    </div>
    <div class="container-fluid">
        <!-- DATATABLE TO VIEW ALL LOANS D -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">All Loans</div>
                <!-- <div class="text-sm">
                    When displaying data in a DataTable, it can often be useful to your end users for them to have the ability to obtain the data from the DataTable, extracting it into a file for them
                    to use locally. This can be done with either HTML5 based buttons or Flash buttons.
                </div> -->
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100 responsive" id="datatable2">
                    <thead>
                        <tr>
                            <th data-priority="1">Account Nbr</th>
                            <th>Branch</th>
                            <th>Loan Officer</th>
                            <th class="sort-alpha" >Amount</th>
                            <th class="sort-alpha" >Balance</th>
                            <th class="sort-alpha" >Disbursed</th>
                            <th class="sort-alpha" >Product Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX" v-for="loan in loans" :key="loan.id">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{loan.amount}}</td>
                            <td></td>
                            <td>{{loan.disbursement_date}}</td>
                            <td>X</td>
                            <td><a v-bind:href="'details/'+loan.id" ><button class="btn btn-primary" @click="getLoanId(loan.id)"><i class="fa fa-eye" style="color:white">&nbsp;view</i></button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
// import DataTable from '../../angle/modules/tables/datatable'
export default {
    name: 'view-loans',
    data () {
        return {
            title: 'Loans',
            loans: []
        }
    },
    methods: {
        getLoanId(id) {
            return $this.route.push()
        }
    },
    mounted() {
        Container.resolve('viewLoans').then(data => {
            this.loans = data.loans
        })


        
    }
}
</script>

<style>

</style>