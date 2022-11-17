<?php include '../database/database.php';

    // Deleta o objeto especificado

    $del = "DELETE 
            FROM tb_book 
            WHERE id_book = ". $_GET['book'];

    if ($sql = $mysqli->query($del)) {
        header('Location: ../templates/admin/index.php');
    } else {
        $mysqli->error;
        ?>
        <script>
            if (confirm('O procedimento falhou; tente novamente!')) {
                <?php header('Location: ../templates/admin/index.php'); ?>
            }
        </script>
        <?php
    }

?>