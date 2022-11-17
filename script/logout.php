<?php include('../database/database.php');

    /*
     * Limpa a sessão do usuário
     */

    if (isset($_SESSION['id'])) {
        session_destroy();
        header('Location: ../templates/sign/index.php');
    }

?>