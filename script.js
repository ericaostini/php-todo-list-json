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
            // console.log(this.newTodo);
            if (this.newTodo == '') {
                return;
            }
            const data = new FormData;
            data.append("addTodo", this.newTodo);

            axios.post(this.apiUrl, data).then((response) => {
                this.todoList = response.data;
            })

        }

    },
    mounted() {
        this.getTodoList();
    }
}).mount('#app');