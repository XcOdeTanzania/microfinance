/**
 * Created by henry on 26-Mar-20.
 */

import UserDetail from '@Component/users/user-detail'
Container.provide({
    register({Vue}){
        Vue.component('user-detail',UserDetail)
    }
});