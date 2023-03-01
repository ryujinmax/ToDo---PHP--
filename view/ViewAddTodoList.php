<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todolist" . PHP_EOL;

    $todo = input("Todo ( X untuk Batal )");

    if ($todo == "X") {
        echo "Batal Menambah Todolist" . PHP_EOL;
    } else {
        AddTodoList($todo);
    }

}

?>