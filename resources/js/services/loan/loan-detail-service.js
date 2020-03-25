import LoanDetail from '@Component/loan/loan-detail'

Container.provide({
    register({Vue}) {
        Vue.component('loan-detail', LoanDetail)
    }
})