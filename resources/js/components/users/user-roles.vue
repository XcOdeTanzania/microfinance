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
                    <tr class="gradeC" v-for="(role,index) in roles">
                        <td>{{role.name}}</td>
                        <td>{{role.description}}</td>
                        <td ><i v-if="role.active" class="fa fa-check text-success"></i> <i v-if="!role.active" class=" text-danger text-bold " > X </i> </td>
                        <!--<td><a href="/user/role">-->
                            <!--<button class="btn btn-primary">-->
                                <!--<i class="fa fa-eye" tyle="color:white">&nbsp;view</i>-->
                            <!--</button>-->
                        <!--</a></td>-->
                        <td>
                            <button id="showRoleDetail" @click="clicked" type="button" class="btn btn-primary" v-bind:data-role="JSON.stringify(role)">
                                View
                            </button>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
        <div class="modal fade" id="roleDetailModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label " for="roleName">Name</label>
                                <div class="col-xl-10 col-md-9 col-8"><input class="form-control" readonly id="roleName" type="text" placeholder="" value="Hawa12" /></div>
                            </div>
                            <div class="form-group row">
                                <label class="text-bold col-xl-2 col-md-3 col-4 col-form-label " for="roleDetail">Description</label>
                                <div class="col-xl-10 col-md-9 col-8"><input class="form-control" readonly id="roleDetail" type="text" value="Head Office" /></div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import $ from 'jquery';
    import bootstrap from 'bootstrap';
//    import datatable from 'datatable'

    export default {
        name: 'user-roles',
        data(){
            return {roles: []}
        },

        methods: {
            getRoles()  {
                Container.resolve('roles').then(data => this.roles = data.roles);
               $('#showRoleDetail').click(function(){
                   console.log('Hello world')
               })
            },
            clicked(){
                console.log('Hello');
                $('#showRoleDetail').modal('show')
            }
        },

        mounted(){
            this.getRoles();

        }
    }
</script>