<?php include('../database/database.php');

	if (isset($_POST['mail'])) {

	    $mail = $_POST['mail'];
	    $password = $_POST['password'];

	    $search =  "SELECT * 
	                FROM tb_user 
	    		    WHERE ds_mail = '". $mail ."' AND pw_password = '". $password ."'";
		echo $search;
	    if ($sql = $mysqli->query($search)) {

	        if ($sql->num_rows == 1) {
	    
	            while ($row = $sql->fetch_object()) {
					
					$_SESSION['id'] = $row->id_user;
					$_SESSION['username'] = $row->nm_name;
					$_SESSION['mail'] = $row->ds_mail;
					$_SESSION['level'] = $row->st_level;
	    
	                if ($_SESSION['level'] == 1) {
                        header('Location: ../templates/index.html');

	            	} else if ($_SESSION['level'] == 2) {
	                	header('Location: ../templates/admin/index.php');
					}
	            }
	        } else {
				?><script> alert('Login e/ou senha inválidos, tente novamente'); </script><?php
				header('Location: ../templates/sign/index.html');

			}
	    }
	}
?>