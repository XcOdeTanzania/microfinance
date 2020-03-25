import Awaiting from '@Component/loan/awaiting'

Container.provide({
    register({Vue}){
        Vue.component('awaiting-loans', Awaiting)
    }
})