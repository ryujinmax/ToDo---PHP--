<?php

require_once "../Model/TodoList.php";
require_once "../view/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Sapi");
AddTodoList("Kambing");
AddTodoList("Domba");

showTodoList();

viewRemoveTodoList();

showTodoList();


?>