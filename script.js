const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
        }
    },
    methods: {
        getTodoList() {
            axios
                .get(this.apiUrl)
                .then((response) => {
                    console.log(response.data);
                    this.todoList = response.data;

                })
                .catch((error) => {
                    console.log(error);
                })
                .finaly(() => {
                });

        }

    },
    mounted() {
        this.getTodoList();
    }
}).mount('#app');