/**
 * Created by henry on 24-Mar-20.
 */
import ClosedClients from '@Component/clients/closed';

Container.provide({
    register({Vue}){
        Vue.component('closed-clients',ClosedClients)
    }
});