<?php

require_once __DIR__ ."/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/view/ViewShowTodoList.php";
require_once __DIR__ . "/view/ViewAddTodoList.php";
require_once __DIR__ . "/view/ViewRemoveTodoList.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi  ToDo List" . PHP_EOL;

viewShowTodoList();



?>