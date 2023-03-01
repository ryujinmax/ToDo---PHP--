<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor ( X Untuk Batal )");

    if ($pilihan == "X") {
        echo "Batal Menghapus Todo";
    } else {
        $success = RemoveTodoList($pilihan);

        if ($success) {
            echo "Berhasil Mengahapus Todo Nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Nomor $pilihan" . PHP_EOL;
        }
    }

}

?>