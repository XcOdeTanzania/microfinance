/**
 * Created by henry on 23-Mar-20.
 */
import axios from "axios";

Container.provide({
    register({ container, content }) {
        // Get all clients list
        container.bind(
            "clients",
            async () => {
                const { data } = await axios.get(`/api/client/list`);
                return data;
            },
            {}
        );

        container.bind(
            "groups",
            async () => {
                const { data } = await axios.get(`/api/groups`);
                return data;
            },
            {}
        );
        container.bind('viewLoans',
        async () => {
            const {data} = await axios.get('/api/loan/list')
                return data
            },
            {}
            );

            container.bind(
            "tasks",
            async () => {
                const { data } = await axios.get('/api/tasks');
                return data;
            },
            {}
        );

        container.bind(
            "users",
            async () => {
                const { data } = await axios.get('/api/users');
                return data;
            },
            {}
        );

        container.bind(
            "users",
            async () => {
                const { data } = await axios.get('/api/user/list');
                return data;
            },
            {}
        );

        container.bind('roles',async () =>{
            const {data} = await axios.get('/api/role/list');
            return data;
        });
    }
});

