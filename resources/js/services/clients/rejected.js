/**
 * Created by henry on 24-Mar-20.
 */
import RejectedClients from '@Component/clients/rejected';

Container.provide({
    register({Vue}){
        Vue.component('rejected-clients',RejectedClients)
    }
});