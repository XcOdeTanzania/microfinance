import Withdraw from '@Component/loan/withdraw'

Container.provide({
    register({Vue}) {
        Vue.component('withdraw-loans', Withdraw)
    }
})