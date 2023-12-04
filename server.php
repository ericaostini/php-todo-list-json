<?php
$listcontent = file_get_contents("todo-list.json");
// var_dump($listcontent);
$listTask = json_decode($listcontent, true);
// var_dump($listTask);

if (isset($_POST["addTodo"])) {
    $newTodo = $_POST["addTodo"];
    array_push($listTask, ["text" => $newTodo, "done" => false]);
    file_put_contents("todo-list.json", json_encode($listTask));
}

// controllo http method
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    if (isset($_POST["removeTodo"])) {
        $taskIndex = $_POST["removeTodo"];
        array_splice($listTask, $taskIndex, 1);
        file_put_contents("todo-list.json", json_encode($listTask));
    }
}

if ($method == "PUT") {
    $obj = json_decode(file_get_contents('php://input'), true);
    if (isset($obj['index'])) {
        $index = $obj['index'];
        $listTask[$index['done']] = !$listTask[$index['done']];
        file_put_contents('todo-list.json', json_encode($list));
    }
}


header("Content-Type: application/json");
echo json_encode($listTask);
?>