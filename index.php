<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="script.js" type="module"></script>
    <title>Vue ToDoList</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <header class="text-center my-3">
                <div class="d-flex myImg align-items-end">
                    <h1>To-do List</h1>
                </div>
                <div class="align-items-center justify-content-between">
                    <div class="m-3 d-flex align-items-center">
                        <input type="text" class="w-25 form-control bg-body-secondary d-block justify-content-end"
                            placeholder="Nuovo compito" v-model="newTodo">
                        <button class="mybtn mx-3" @click="addTodo">Aggiungi</button>
                    </div>
                </div>
            </header>
            <main>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group list-group-flush border border-1 rounded">
                            <li v-for="(item, index) in todoList" class="list-group-item" :key="index">
                                <span>{{item.text}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>