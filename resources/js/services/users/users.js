/**
 * Created by henry on 25-Mar-20.
 */
import Users from '@Component/users/users';

Container.provide({
    register({Vue}){
        Vue.component('users',Users)
    }
});