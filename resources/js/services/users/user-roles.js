/**
 * Created by henry on 25-Mar-20.
 */

import UserRoles from '@Component/users/user-roles'

Container.provide({
    register({Vue}){
        Vue.component('user-roles',UserRoles);
    }
});