<template>
    <div >
        <div class="content-heading "><h2>Roles</h2></div>
        <div class="card">
            <div class="card-header"> Header</div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeC" v-for="role in roles">
                        <td>{{role.name}}</td>
                        <td>{{role.description}}</td>
                        <td ><i v-if="role.active" class="fa fa-check text-success"></i> <i v-if="!role.active" class=" text-danger text-bold " > X </i> </td>
                        <td><a href="/user/role">
                            <button class="btn btn-primary">
                                <i class="fa fa-eye" tyle="color:white">&nbsp;view</i>
                            </button>
                        </a></td>

                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: 'User Roles',
        data(){
            return {roles: []}
        },

        methods: {
            getRoles()  {
                Container.resolve('roles').then(data => this.roles = data.roles)
            }
        },

        mounted(){
            this.getRoles()
            //console.log(this.roles);
        }
    }
</script>