/**
 * Created by henry on 24-Mar-20.
 */
import RegisterClient from '@Component/clients/register';
require('../../../../public/angle/js/wizard');

Container.provide({
    register({Vue}){
        Vue.component('register-client',RegisterClient)
    },

});