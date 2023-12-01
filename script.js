const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            newTodo: {
                text: '',
                done: false
            }
        }
    },
    methods: {
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.todoList = response.data;
                console.log(this.todoList);
            })
        },
        addTodo() {

        }

    },
    mounted() {
        this.getTodoList();
    }
}).mount('#app');