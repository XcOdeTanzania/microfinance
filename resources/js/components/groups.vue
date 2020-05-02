<template>
    <div>
        <div class="content-heading ">Groups</div>
        <!-- START card-->
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="groups-tab"
                            data-toggle="tab"
                            href="#groups"
                            role="tab"
                            aria-controls="groups"
                            aria-selected="true"
                            @click="onclick(event)"
                            >Groups</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="closed-tab"
                            data-toggle="tab"
                            href="#closed"
                            role="tab"
                            aria-controls="closed"
                            aria-selected="false"
                            >Closed Groups</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="pending-approval-tab"
                            data-toggle="tab"
                            href="#pending-approval"
                            role="tab"
                            aria-controls="pending-approval"
                            aria-selected="false"
                            >Pending Approval</a
                        >
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div
                        class="tab-pane fade show active"
                        id="groups"
                        role="tabpanel"
                        aria-labelledby="groups-tab"
                    >
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row">
                                    <label
                                        class="col-md-2 col-form-label"
                                        for="input-id-1"
                                        >Branch</label
                                    >
                                    <div class="col-md-6">
                                        <select
                                            aplaceholder="Select"
                                            name="branch"
                                            class="form-control"
                                            id="branch"
                                            @change="onchange($event)"
                                        >
                                            <option>Select</option>
                                            <option
                                                v-bind:value="branch.id"
                                                v-for="branch in branches"
                                                v-bind:key="branch.id"
                                            >
                                                {{ branch.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label
                                        class="col-md-2 col-form-label"
                                        for="input-id-1"
                                        >Loan Office</label
                                    >
                                    <div class="col-md-6">
                                        <select
                                            name="loanOfficer"
                                            class="form-control"
                                            id="loanOfficer"
                                            @change="updateGroupTable($event)"
                                        >
                                            <option>select</option>

                                            <option
                                                v-bind:value="officer.id"
                                                v-for="officer in officers"
                                                v-bind:key="officer.id"
                                            >
                                                {{ officer.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        type="filter"
                                    >
                                        Search
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="closed"
                        role="tabpanel"
                        aria-labelledby="closed-tab"
                    >
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row">
                                    <label
                                        class="col-md-2 col-form-label"
                                        for="input-id-1"
                                        >Branch</label
                                    >
                                    <div class="col-md-10">
                                        <select
                                            name="accounttag"
                                            class="form-control"
                                            id="accountag"
                                        >
                                            <option>Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label
                                        class="col-md-2 col-form-label"
                                        for="input-id-1"
                                        >Loan Office</label
                                    >
                                    <div class="col-md-10">
                                        <select
                                            name="accounttag"
                                            class="form-control"
                                            id="accountag"
                                        >
                                            <option>Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        type="filter"
                                    >
                                        Search
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="pending-approval"
                        role="tabpanel"
                        aria-labelledby="pending-approval-tab"
                    >
                        <form class="form-horizontal" method="get" action="">
                            <fieldset>
                                <div class="form-group row">
                                    <label
                                        class="col-md-2 col-form-label"
                                        for="input-id-1"
                                        >Branch</label
                                    >
                                    <div class="col-md-10">
                                        <select
                                            name="accounttag"
                                            class="form-control"
                                            id="accountag"
                                        >
                                            <option>Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group row">
                                    <label
                                        class="col-md-2 col-form-label"
                                        for="input-id-1"
                                        >Loan Office</label
                                    >
                                    <div class="col-md-10">
                                        <select
                                            name="accounttag"
                                            class="form-control"
                                            id="accountag"
                                        >
                                            <option>Select</option>
                                            <option></option>
                                            <option> </option>
                                            <option> </option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        type="filter"
                                    >
                                        Search
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <table class="table table-striped my-4 w-100" id="datatable3">
                    <thead>
                        <tr>
                            <th>Group Name</th>
                            <th>External ID</th>
                            <th>Branch Name</th>
                            <th>Loan Officer</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody id="groupTableBody">
                        <tr v-for="group in groups" v-bind:key="group.id">
                            <td>
                                {{ group.name }}
                            </td>
                            <td>
                                {{ group.uuid }}
                            </td>
                            <td>
                                {{ group.branch_id }}
                            </td>
                            <td>
                                {{ group.user_id }}
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
            <!-- END card-->
        </div>
    </div>
</template>

<script>
export default {
    name: "groups",
    data() {
        return { groups: [], branches: [], officers: [] };
    },
    methods: {
        getApprovedGroups() {
            Container.resolve("approvedGroups").then(data => {
                this.branches = data.branches;
                this.groups = data.groups;
            });
        },

        updateGroupTable(event) {
            for (let index = 0; index < this.officers.length; index++) {
                if (event.target.value == this.officers[index].id) {
                    this.groups = this.officers[index].groups;

                    for (let j = 0; j < this.groups.length; j++) {
                        this.groups[j].user_id = this.officers[index].name;
                        this.groups[j].branch_id = this.officers[
                            index
                        ].branch_id;
                    }
                }
            }
            console.log(event.target.value);
        }
    },
    mounted() {
        this.getApprovedGroups();
        console.log(this.branches);
        // console.log(this.groups);
    }
};
</script>
