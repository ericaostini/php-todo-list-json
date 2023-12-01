<?php
$listcontent = file_get_contents("todo-list.json");
// var_dump($todolist);
$listTask = json_decode($listcontent, true);
// var_dump($todolist);
// header("Content-Type: application/json");
// echo json_encode($todolist);
?>