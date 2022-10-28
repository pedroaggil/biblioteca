<?php
    // Valida se fez login e te manda pro lugar mais apropriado pra você
        // * se usuário comum, página inicial
        // * se administrador, página de controle de informações
        // * se não fez login, página de login e/ou cadastro de novo usuário

    if (isset($_SESSION['lvl'])) {
        if ($_SESSION['lvl'] == 1) { // comum
            header('Location: templates/index.html');
        } elseif ($_SESSION['lvl'] == 2) { // admin
            header('Location: templates/admin/index.html');
        }
    } else { // não logado
        header('Location: templates/sign/index.html');
    }

?>