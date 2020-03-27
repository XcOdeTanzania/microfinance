<template>
<div>
<div class="content-heading">
        <div>
            Actions Pending Approval
         </div>
</div>
<div class="card card-default">
    <div class="card-body">
        <div class= "col-xl-6 col-lg-6 col-md-10">
            <form>
                <div class="form-group row">
                   <label for="user" class="col-md-2 col-form-label">User</label>
                    <div class="col-md-10">
                         <select id="user" class="custom-select custom-select-sm" name="user">
                        <option selected="">Open this select menu</option>
                        <option
                                v-bind:value="user.id"
                                v-for="user in users">
                                {{user.name}}
                        </option>

                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="entity" class="col-md-2 col-form-label">Entity</label>
                    <div class="col-md-10">
                       <select class="custom-select custom-select-sm" name="entity"  id="entity">
                           <option selected=""> Open this select menu</option>
                           <option value="1">group</option>
                              <option value="2">client</option>
                               <option value="3">Loan</option>
                       </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="from" class="col-md-2 col-form-label mb-2">*From</label>
                    <div class= "col-6">
                       <div class="input-group date" id="from">
                          <input class="form-control" type="text">
                              <span class="input-group-append input-group-addon">
                                  <span></span>
                              </span>
                       </div>
                    </div>
                    <div class="col-4 input-group-prepend pb-1">
                        <input class="form-control " id="fromTimer" type="text" placeholder="00:00:00" aria-describedby="inputGroupPrepend3" required="">
                        <span class="input-group-text mb-1" id="inputGroupPrepend3"><i class="wi wi-time-3"></i></span>
                    </div>
                </div>
                <div class="form-group row mb-2">
                   <label for="to" class="col-md-2 col-form-label mb-2">*To</label>
                   <div class="col-6">
                       <div class="input-group date" id="to">
                           <input class="form-control" type="text">
                           <span class="input-group-append input-group-addon">
                               <span></span>
                           </span>
                        </div>
                   </div>
                   <div class="col-4 input-group-prepend pb-1">
                     <input class="form-control " id="toTimer" type="text" placeholder="00:00:00" aria-describedby="inputGroupPrepend3" required>
                     <span class="input-group-text  mb-1" id="inputGroupPrepend3"><i class="wi wi-time-3 "></i></span>
                   </div>
                </div>
                <div class="row from-control">
                   <div class="col-2"></div>
                   <button class=" form-group btn btn-primary ml-3  " type="submit">Show</button>
                </div>

         </form>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title"></div>
            <div class="text-sm"></div>
        </div>
        <div class="card-body">
            <table class="table table-striped my-4 w-100" id="datatable1">
                <thead>
                    <tr>
                            <th data-priority="1">Action</th>
                            <th>Entity</th>
                            <th>Performed by</th>
                            <th>Office name</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Amount</th>
                            <th>Submitted on date</th>
                            <th>Effective date</th>
                    </tr>
                 </thead>
                <tbody>
                        <tr v-for="task in tasks">
                            <td>{{task.action}}</td>
                            <td>{{task.entity}}</td>
                            <td>{{task.user_id}}</td>
                            <td>{{task.branch_id}}</td>
                            <td>{{task.name}}</td>
                            <td>{{task.group_id}}</td>
                            <td>{{task.amount}}</td>
                            <td>{{task.submitted_on_date}}</td>
                            <td>{{task.effective_date}}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- </div> -->
</template>


<script>
export default {
    name: "tasks",
    data() {
        return { tasks: [], users: [] };
    },
    methods: {
        getTasks() {
            Container.resolve("tasks").then(data => {
                this.tasks = data.tasks;
            });
        },

        getUsers()
        {
            Container.resolve("users").then(data =>
            {
                this.users = data.users;
            });
        }
    },
    mounted() {
        this.getTasks();
        this.getUsers();
    }
};
</script>
