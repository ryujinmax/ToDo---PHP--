<?php

require_once "../view/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Boba");
AddTodoList("Teh");
AddTodoList("Kopi");

viewAddTodoList();

showTodoList();

?>