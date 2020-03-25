import ViewLoans from '@Component/loan/view-loans';

Container.provide({
    register({Vue}){
        Vue.component('view-loans',ViewLoans)
    }
});