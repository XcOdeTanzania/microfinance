/**
 * Created by henry on 23-Mar-20.
 */
import axios from 'axios'


Container.provide({
    register({container, content}) {
        container.bind('clients', () => {
                return axios.get(`/api/client/list`).then(({data}) => {
                    return data;
                })
            }, {},
        )
    }
});