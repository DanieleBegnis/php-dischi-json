const { createApp } = Vue;

createApp({
    data() {
        return {
            disks: []
        };
    },
    methods: {
        getTodosFromApi() {
            axios.get('server.php').
            then((response) => {
                this.disks = response.data;
            }); 
        }
    },
    mounted() {
        this.getTodosFromApi();
    }
}).mount('#app');