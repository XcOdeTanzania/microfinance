<template>
    <div >
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header d-flex align-items-center">
                    <div class="d-flex justify-content-center col">
                        <div class="h4 m-0 text-center">User Details</div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row py-4 justify-content-center">
                        <div class="col-12 col-sm-10">
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail1">Username</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyContact1" type="text" placeholder="" :value="user.name" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyContact2">First Name</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyContact2" type="text" :value="user.profile.first_name" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="middle_name">Middle Name</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="middle_name" type="text" :value="user.profile.middle_name" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail3">Last Name</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyDetail3" type="text" :value="user.profile.last_name" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail4">Email</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyDetail4" type="text" :value="user.email" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail5">Branch Name</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyDetail5" type="text" :value="user.branch.name" /></div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail6">Role</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyDetail6" type="text" :value="user.roles[0].name" /></div>
                                </div>
                                <!--<div class="form-group row">-->
                                    <!--<label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail7">Client Name</label>-->
                                    <!--<div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyDetail7" type="text" value="Kasuma" /></div>-->
                                <!--</div>-->
                                <div class="form-group row">
                                    <label class="text-bold col-xl-3 col-md-4 col-5 col-form-label " for="input readonlyDetail8">System defined</label>
                                    <div class="col-xl-9 col-md-8 col-7"><input readonly class="form-control" id="input readonlyDetail8" type="text" placeholder="" value="No" /></div>
                                </div>

                                <div> <a :href="'/user/users'"><button class="btn btn-primary"><i class="fas fa-arrow-left" style="color:white">&nbsp;Back</i></button></a></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import $ from 'jquery';
    export default{
        name:'users-details',
        props:['user'],
        data(){
            return {u:null}
        },
        methods:{

        },
        mounted(){
            this.u = this.user;
            console.log(this.u)
//            Container.resolve('users').then((data)=>{
//                this.users = data.users;
//            });
        }

    }

</script>t>