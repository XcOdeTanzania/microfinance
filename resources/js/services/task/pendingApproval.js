import Task from "@Component/task/pendingApproval";

Container.provide({
    register({ Vue }) {
        Vue.component("pending-approval-task", Task);
    }
});
