import Task from "@Component/task/myAction";

Container.provide({
    register({ Vue }) {
        Vue.component("my-action-task", Task);
    }
});
