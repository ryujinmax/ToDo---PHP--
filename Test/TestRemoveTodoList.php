<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

AddTodoList("Singa");
AddTodoList("Kecoa");
AddTodoList("Hayyuk");
AddTodoList("Tutud");
AddTodoList("Lalat");

showTodoList();

RemoveTodoList(3);

showTodoList();

$success = RemoveTodoList(3);
var_dump($success);

?>