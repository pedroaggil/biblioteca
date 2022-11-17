<?php include('../database/database.php');

    // Atualiza as informações do livro especificado
   
    $book = $_GET['book'];

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

    $update =  "UPDATE tb_book 
                    (nm_title, nm_author, ds_publisher, ds_collection, nm_subtitle, ds_synopsis, nm_translator, dt_launch, nm_original_title, dt_translate_date, nm_reviewer, nr_isbn, ds_genre, il_image) 
                SET nm_title = '".$title."',
                    nm_author = '".$author."',
                    ds_publisher = '".$publisher."',
                    ds_collection = '".$collection."',
                    nm_subtitle = '".$subtitle."',
                    ds_synopsis = '".$synopsis."',
                    nm_translator = '".$translator."',
                    dt_launch = '".$launch."',
                    nm_original_title = '".$original__title."',
                    dt_translate_date = '".$date__translate."',
                    nm_reviewer = '".$reviewer."',
                    nr_isbn = '".$isbn."',
                    ds_genre = '".$genre."',
                    il_image = '".$image."',
                WHERE id_book = ". $book;

    if ($upd__sql = $mysqli->query($update)) {
        header('Location: ../templates/admin/index.php');
    } else {
        echo $mysqli->error;
    }  
?>