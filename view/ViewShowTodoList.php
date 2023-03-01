<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../view/ViewAddTodoList.php";
require_once __DIR__ . "/../view/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowTodoList()
{
    while(true)
    {

        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "X. Untuk Keluar" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "X") {
            break;
        } else {
            echo "Pilihan Tidak Di Mengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;

}


?>