<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                            placeholder="Nuovo compito">
                        <button class="mybtn mx-3">Aggiungi</button>
                    </div>
                </div>
            </header>
            <main>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group list-group-flush border border-1 rounded">
                            <li v-for="(task, index) in todolist" class="list-group-item " :key="index">{{task}}</li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>