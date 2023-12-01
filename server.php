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

header("Content-Type: application/json");
echo json_encode($listTask);
?>