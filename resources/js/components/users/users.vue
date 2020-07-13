<template>
    <div class="container-fluid">
        <!-- DATATABLE -->
        <div class="card card-default">
            <div class="content-heading "><h2>Users</h2></div>
            <div class="card">
                <div class="card-header"><br>
                    <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable1">
                            <thead>
                            <tr>
                                <th>User Name</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Roles</th>
                                <th>Office Name</th>
                                <th>Email</th>
                                <th>Active</th>
                                <th>Locked</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(user,index) in users"  class="gradeC">
                                <td>{{user.id}}</td>
                                <td >{{ user.first}}</td>
                                <td>{{ user.last}}</td>
                                <td>{{ user.roles[0].name}}</td>
                                <td>{{ user.branch.name}}</td>
                                <td>{{user.email}}</td>
                                <td>{{user.active}}</td>
                                <td>No</td>
                                <td><a v-bind:href="'/user/details/'+user.id"><i class="fa fa-eye" style="color:white"></i>&nbsp;view</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

</template>

<script>

    import $ from 'jquery';
    export default{
        name:'users',
        data(){
            return {users:[]}
        },
        methods:{

        },
        mounted(){
            Container.resolve('users').then((data)=>{
                this.users = data.users;
            });
        },

    }

</script>