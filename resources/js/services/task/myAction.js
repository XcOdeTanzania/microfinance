import Task from "@Component/myAction";

Container.provide({
    register({ Vue }) {
        Vue.component("myAction", Task);
    }
});
