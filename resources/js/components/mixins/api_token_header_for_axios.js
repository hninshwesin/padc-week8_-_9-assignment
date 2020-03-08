export default {
    created() {
        if (this.$cookie.get('api_token') !== null) {
            axios.defaults.headers.common = {
                'Authorization': 'Bearer ' + this.$cookie.get('api_token')
            }
        }

    }
}