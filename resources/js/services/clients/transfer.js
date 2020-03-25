/**
 * Created by henry on 24-Mar-20.
 */
import TransferClients from '@Component/clients/transfer';

Container.provide({
    register({Vue}){
        Vue.component('transfer-clients',TransferClients)
    }
});