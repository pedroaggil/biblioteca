<?php include('../database/database.php');

    /*
     * Altera o status de disponibilidade de determinado livro
     * Lógica: 
        *  Se o status for 'Disponível' ("Sim"), altera para 'Indisponível' ("Nao");
        * Senão, altere de 'Nao' para 'Sim'.
     * Para isso, é selecionado o objeto a ser manipulado a partir de especificação de ID, e altera em seguida com base na inteligência definida
     */

    $book = $_GET['book'];

    $search =  "SELECT *
                FROM tb_book
                WHERE id_book = ". $book;

    $sql = $mysqli->query($search);

   if ($src__sql = $sql -> fetch_object()) {
        $new__availability;
        if ($src__sql->st_availability == 'Sim') {
            $new__availability = 'Nao';
        } elseif ($src__sql->st_availability == 'Nao') {
            $new__availability = 'Sim';
        } else {
            echo $mysqli->error;
        }
    }

    $update =  "UPDATE tb_book 
                SET st_availability = '".$new__availability."' 
                WHERE id_book = ". $book;
    if ($upd__sql = $mysqli->query($update)) {
        header('Location: ../templates/admin/index.php');
    } else {
        echo $mysqli->error;
    }

?>