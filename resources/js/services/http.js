/**
 * Created by henry on 23-Mar-20.
 */
import axios from "axios";

Container.provide({
    register({ container, content }) {
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
    }
});
