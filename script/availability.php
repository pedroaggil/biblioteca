<?php include('../database/database.php');

    $book = $_GET['book'];

    $search =  "SELECT *
                FROM tb_book
                WHERE id_book = ". $book;

    $sql = $mysqli->query($search);

   if ($src__sql = $sql -> fetch_object()) {
        $a = $src__sql->st_availability;
        echo $a;
        if ($src__sql->st_availability == 'Sim') {
            $new__availability = 'Não';
        } elseif ($src__sql->st_availability == 'Não') {
            $new__availability = 'Sim';
        } else {
            echo 'me diz o que te ofende amigo PORFAVOR';
        }
    }

    $update =  "UPDATE tb_book 
                SET st_availability = '".$new__availability."' 
                WHERE id_book = ". $book;

    echo $update;
  
    /* if ($upd__sql = $mysqli->query($update)) {
        header('Location: ../templates/admin/index.php');
    } else {
        echo $mysqli->error;
    }
*/
?>