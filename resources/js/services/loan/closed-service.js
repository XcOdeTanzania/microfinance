import Closed from '@Component/loan/closed'

Container.provide({
    register({Vue}) {
        Vue.component('closed-loans', Closed)
    }
})