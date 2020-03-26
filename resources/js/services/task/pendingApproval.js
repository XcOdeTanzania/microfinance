import Task from "@Component/pendingApproval";

Container.provide({
    register({ Vue }) {
        Vue.component("pendingApproval", Task);
    }
});
