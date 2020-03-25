<template>
    <div>
        <div class="content-heading ">Register Client</div>
        <div class="card card-default">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="table-responsive bootgrid">
                    <table class="table table-striped" id="bootgrid-selection">
                        <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                            <th data-column-id="name">Name</th>
                            <th data-column-id="group">Group</th>
                            <th data-column-id="officer">Loan Officer</th>
                            <th data-column-id="branch" data-order="desc">Branch</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10238</td>
                            <td>Abdalah Juma</td>
                            <td>Individual</td>
                            <td>John Jr.</td>
                            <td>Mikocheni</td>
                        </tr>
                        <tr>
                            <td>10538</td>
                            <td> Alpha 1</td>
                            <td> Alpha 1</td>
                            <td>John Jr.</td>
                            <td>Mwenge</td>
                        </tr>
                        <tr>
                            <td>10268</td>
                            <td>John Okelo</td>
                            <td>Alpha 1</td>
                            <td>J. Johnson</td>
                            <td>Mikocheni</td>
                        </tr>
                        <tr>
                            <td>10298</td>
                            <td> Alpha 1</td>
                            <td> Individual</td>
                            <td>John Jr.</td>
                            <td>Mikocheni</td>
                        </tr>
                        <tr>
                            <td>10438</td>
                            <td> Alpha 1</td>
                            <td> Alpha 1</td>
                            <td>J. Johnson</td>
                            <td>Mwenge</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <button type="button" class="btn btn-primary btn-sm ml-auto m-2" data-toggle="collapse" href="#transferCollapse"
                        role="button" aria-expanded="false" aria-controls="transferCollapse"> Transfer To
                </button>
                <div class="collapse mb-2 " id="transferCollapse">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10 col-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="destineBranch">Branch </label>
                                    <select class="custom-select " required id="destineBranch" name="destineBranch">
                                        <option selected>Retain Current</option>
                                        <option value="">Branch 1</option>
                                        <option value="">Branch 2</option>
                                        <option value="">Branch 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="destineOfficer">Loan Officer </label>
                                    <select class="custom-select " required id="destineOfficer" name="destineOfficer">
                                        <option selected>Retain Current</option>
                                        <option value="">Officer 1</option>
                                        <option value="">Officer 2</option>
                                        <option value="">Officer 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="destineGroup">Group </label>
                                    <select class="custom-select " required id="destineGroup" name="destineGroup">
                                        <option selected>Retain Current</option>
                                        <option value="">Group 1</option>
                                        <option value="">Group 2</option>
                                        <option value="">Group 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reason">Reason</label>
                                    <textarea id="reason" class="form-control" type="text" name="reason"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary" > Transfer Clients </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>

    //    import datatable from '../../angle/modules/tables/datatable';
    import $ from 'jquery';
    export default{
        name:'transfer',
        data(){
            return {}
        },
        methods:{

        },
        mounted(){


        }

    }

</script>