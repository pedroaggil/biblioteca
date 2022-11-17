<?php include('../database/database.php');

    // Valida se o usuário é válido e cadastra ele no sistema

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $search =  "SELECT * 
                FROM tb_user 
                WHERE ds_mail = ". $mail;

    $srcQuery = $mysqli->query($search);

    if($srcQuery->num_rows != 0) {
		echo 'A conta de e-mail indicada já está cadastrada em nosso sistema! Tente usar alguma diferente.';

	} else {  
        
        $insert =  "INSERT INTO tb_user 
                    VALUES (null, '". $name ."', '". $mail ."', '". $pass ."')";

		if ($sql = $mysqli->query($insert)) {
			$_SESSION['name'] = $name;
      $_SESSION['mail'] = $mail;
      $_SESSION['pass'] = $pass;

      header('Location: ../templates/admin/index.php');

		} else {
			echo $mysqli->error;

		};
	}

?>