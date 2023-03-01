<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

AddTodoList("Amur");
AddTodoList("Suep");
AddTodoList("Alok");

var_dump($todolist);

?>