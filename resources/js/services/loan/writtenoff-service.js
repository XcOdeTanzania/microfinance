import WrittenOff from '@Component/loan/written-off'

Container.provide({
    register({Vue}) {
        Vue.component('written-off', WrittenOff)
    }
})