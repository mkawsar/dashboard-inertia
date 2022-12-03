import axios from 'axios'

export default class {
    /**
     * Send GET Request
     * @param  {string} url
     * @return {Promise}
     */
    get(url) {
        return new Promise((resolve, reject) => {
            axios.get(url, {}).then(response => {
                if (response.status === 200) {
                    return resolve(response);
                }
            }).catch((error) => {
                return reject(error);
            })
        });
    }

    /**
     * Send POST Request
     * @param  {string} url
     * @param  {object} payload Data object to send
     * @return {Promise}
     */
    post(url, payload) {
        return new Promise((resolve, reject) => {
            axios.post(url, payload, {}).then(response => {
                if (response.status === 200) {
                    return resolve(response);
                }
            }).catch((error) => {
                return reject(error);
            })
        });
    }

    /**
     * Send FIND Request
     * @param  {string} url
     * @return {Promise}
     */
    find(url) {
        return new Promise((resolve, reject) => {
            axios.get(url, {}).then(response => {
                if (response.status === 200) {
                    return resolve(response);
                }
            }).catch((error) => {
                return reject(error);
            })
        });
    }

}
