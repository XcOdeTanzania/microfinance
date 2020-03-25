import Rejected from '@Component/loan/rejected'

Container.provide({
    register({Vue}) {
        Vue.component('rejected-loans', Rejected)
    }
})
