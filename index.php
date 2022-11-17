<?php
    /*
     * Valida se o usuário fez login e o redireciona pro lugar mais apropriado
        * Se logado, página de controle de informações (admin)
        * Senão, visualizador do catálogo
     */

    if (isset($_SESSION['mail'])) {
        header('Location: templates/admin/index.php');
    } else {
        header('Location: templates/index.php');
    }

?>