<?php include('../database/database.php');

    $book = $_GET['book'];

    $search =  "SELECT *
                FROM tb_book
                WHERE id_book = ". $book;

    if ($src__sql = $mysqli->query($search)) {
        if ($src__sql->st_availability == 'Sim') {
            $new__availability = 'Não';
        } elseif ($src__sql->st_availability == 'Não'); {
            $new__availability = 'Sim';
        }
    }

    $update =  "UPDATE tb_book 
                SET st_availability = ".$new__availability." 
                WHERE id_book = ". $book;

    if ($upd__sql = $mysqli->query($update)) {
        header('Location: ../templates/admin/index.php');
    } else {
        echo $update;
        echo $mysqli->error;
    }

?>