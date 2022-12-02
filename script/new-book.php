<?php include('../database/database.php');

    // Cadastra um novo livro no sistema a partir das especificações

    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $collection = $_POST['collection'];
    $subtitle = $_POST['subtitle'];
    $synopsis = $_POST['synopsis'];
    $translator = $_POST['translator'];
    $launch = $_POST['launch'];
    $original__title = $_POST['original__title'];
    $date__translate = $_POST['date__translate'];
    $reviewer = $_POST['reviewer'];
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre'];
    $image = $_FILES['image'];
    $availability = 'Sim';

    if (isset($image)) {

        if ($image['error']) {
            ?><script>alert("Falha ao cadastrar livro.");</script><?php
            exit();
        }

        if ($image['size'] > 3097152) { // image size > 2MB
            ?><script>alert("Arquivo de imagem muito grande. Max.: 2MB");</script><?php
            exit();
        }

        $directory = "../images/book__photos/";
        $nameImage = $image['name'];
        $newNameImage = uniqid();
        $extension = strtolower(pathinfo($nameImage, PATHINFO_EXTENSION));

        if ($extension != "jpg" && $extension != "jpeg" && $extension != "png") {
            ?><script>alert("Tipo de imagem não suportado.");</script><?php
            exit();
        }
            
        $path = $directory . $newNameImage . "." . $extension;
        $finished = move_uploaded_file($image["tmp_name"], $path);

        if ($finished) { 
            ?><script>alert("Livro cadastrado com sucesso!");</script><?php
        } else {
            ?><script>alert("Falha ao cadastrar o livro.");</script><?php
        }

    }

    $insert = "INSERT INTO tb_book VALUES 
              (null, '". $title ."', '". $author ."', '". $publisher ."', '". $collection ."', '". $subtitle ."', '". $synopsis ."', '". $translator ."', '". $launch ."', '". $original__title ."', '". $date__translate ."', '". $reviewer ."', '". $isbn ."', '". $genre ."', '". $availability ."', '". $path ."')";

    if ($sql = $mysqli->query($insert)) {
        header('Location: ../templates/admin/index.php');
    } else {
        echo $mysqli->error;
    }

?>