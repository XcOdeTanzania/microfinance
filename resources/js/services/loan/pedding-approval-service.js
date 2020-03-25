import PeddingApproval from '@Component/loan/pedding-approval';

Container.provide({
    register({Vue}){
        Vue.component('pedding-approval',PeddingApproval)
    }
});