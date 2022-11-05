<?php include('../database/database.php');

    if (isset($_SESSION['id'])) {
        session_destroy();
        header('Location: ../templates/sign/index.php');
    }

?>