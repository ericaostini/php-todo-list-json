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

if (isset($_POST["removeTodo"])) {
    $taskIndex = $_POST["removeTodo"];
    array_splice($listTask, $taskIndex, 1);
    file_put_contents("todo-list.json", json_encode($listTask));
}
if (isset($_POST["updateTodo"])) {
    $taskIndex = $_POST["updateTodo"];
    //var_dump($listIndex[$taskIndex]);
    if ($listTask[$taskIndex]["done"] == true) {
        array_replace($listTask, ["done" => false]);
    } else {
        array_replace($listTask, ["done" => true]);
    }
    file_put_contents("todo-list.json", json_encode($listTask));
}

header("Content-Type: application/json");
echo json_encode($listTask);
?>