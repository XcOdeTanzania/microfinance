/**
 * Created by henry on 23-Mar-20.
 */
import PendingApprovalClients from '@Component/clients/pending-approval-clients';

Container.provide({
    register({Vue}){
        Vue.component('pending-approval-clients',PendingApprovalClients)
    }
});