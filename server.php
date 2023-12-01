<?php
$listcontent = file_get_contents("todo-list.json");
// var_dump($listcontent);
$listTask = json_decode($listcontent, true);
// var_dump($listTask);
header("Content-Type: application/json");
echo json_encode($listTask);
?>