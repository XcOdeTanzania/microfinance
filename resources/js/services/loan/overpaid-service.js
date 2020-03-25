import Overpaid from '@Component/loan/overpaid'

Container.provide({
    register({Vue}) {
        Vue.component('over-paid', Overpaid)
    }
})

