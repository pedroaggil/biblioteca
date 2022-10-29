<?php include('../database/database.php');

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
    $image = $_POST['image'];
    $availability = 'Sim';

    $insert = "INSERT INTO tb_book VALUES 
              (null, '". $title ."', '". $author ."', '". $publisher ."', '". $collection ."', '". $subtitle ."', , '". $synopsis ."', , '". $translator ."', '". $launch ."', '". $original__title ."', '". $date__translate ."', '". $reviewer ."', '". $isbn ."', '". $genre ."', '". $availability ."', '". $image ."')";

    $res = $mysqli->query($insert);

    header('Location: ../template/admin/index.php');

?>