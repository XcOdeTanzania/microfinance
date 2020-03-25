import Groups from "@Component/groups";

Container.provide({
    register({ Vue }) {
        Vue.component("groups", Groups);
    }
});
