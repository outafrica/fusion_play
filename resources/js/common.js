export default {
    data() {
        return {

        }
    },
    methods: {
        async callApi(method, url, dataObj) {
            try {
                // Send a request
                return await axios({
                    method: method,
                    url: url,
                    data: dataObj
                });

            } catch (error) {
                return error.response
            }

        },

        i(desc, title = "Hey") {
            this.$Notice.info({
                title: title,
                desc: desc
            });
        },
        s(desc, title = "Hey") {
            this.$Notice.success({
                title: title,
                desc: desc
            });
        },
        w(desc, title = "Hey") {
            this.$Notice.warning({
                title: title,
                desc: desc
            });
        },
        e(desc, title = "Required") {
            this.$Notice.error({
                title: title,
                desc: desc
            });
        },
        d(desc = "Something went wrong! Please try again! ", title = "Error") {
            this.$Notice.default({
                title: title,
                desc: desc
            });
        }

    },
}