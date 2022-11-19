<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta author="Pedro Gil" content="github.com/pedroaggil">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca &middot; Seshat</title>

    <!-- Bootstrap files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <!-- CSS files -->
    <link rel="stylesheet" href="../style/book-viewer.css">

    <!-- Favicon -->
	<link rel="icon" type="imagem/png" href="../images/icon.png " />
</head>
<body>
    
<main>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="box">
                    <div class="container">
                    <!-- PHP -->
                    <?php include('../database/database.php');

                        $control = 2;
                        $search =  "SELECT * 
                                    FROM tb_book 
                                    ORDER BY nm_title ASC";

                        $result = $mysqli->query($search);

                        while ($sql = $result -> fetch_assoc()) {
                            if ($control == 2) {
                            ?>
                                <div class="item active">
                                <div class="row">
                                    <div class="col-4">
                                        <div id="book__image">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-5 book__description">
                                        <label for="title">Título</label><br>
                                        <?php 
                                            if ($sql['nm_subtitle']) {
                                                echo '<input class="book__info" type="text" readonly id="title" name="title" value="'. $sql['nm_title'] .': '. $sql['nm_subtitle'] .'">';
                                            } else {
                                                echo '<input class="book__info" type="text" readonly id="title" name="title" value="'. $sql['nm_title'] .'">';
                                            }
                                        ?>

                                        <label for="author">Autor(a/es)</label><br>
                                        <input class="book__info" type="text" readonly id="author" name="author" value="<?= $sql['nm_author']; ?>">

                                        <label for="synopsis">Sinopse</label><br>
                                        <textarea class="book__info" name="synopsis" id="synopsis"><?= $sql['ds_synopsis']; ?></textarea><br>

                                        <span class="book__info read__more">Clique aqui para mais informações</span>

                                        <a href="https://wa.me/5513996895339?text=Hmmmm" aria-label="Chat on WhatsApp"><img src="../images/ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png" alt="Chat on WhatsApp"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $control = 1;

                            } else {
                                ?>
                                <div class="item">
                                <div class="row">
                                    <div class="col-4">
                                        <div id="book__image">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-5 book__description">
                                        <label for="title">Título</label><br>
                                        <?php 
                                            if ($sql['nm_subtitle']) {
                                                echo '<input class="book__info" type="text" readonly id="title" name="title" value="'. $sql['nm_title'] .': '. $sql['nm_subtitle'] .'">';
                                            } else {
                                                echo '<input class="book__info" type="text" readonly id="title" name="title" value="'. $sql['nm_title'] .'">';
                                            }
                                        ?>

                                        <label for="author">Autor(a/es)</label><br>
                                        <input class="book__info" type="text" readonly id="author" name="author" value="<?= $sql['nm_author']; ?>">

                                        <label for="synopsis">Sinopse</label><br>
                                        <textarea class="book__info" name="synopsis" id="synopsis"><?= $sql['ds_synopsis']; ?></textarea><br>

                                        <label for="genre">Gênero principal</label><br>
                                        <input class="book__info" type="text" readonly id="genre" name="genre" value="<?= $sql['ds_genre']; ?>"><br>

                                        <span class="book__info read__more">Clique aqui para mais informações</span>

                                        <?php
                                            // Substituir espaços por '%20' (código para o caractere) para sua aceitação em URLs
                                            $nameBook = str_replace(' ', '%20', $sql['nm_title']);
                                            $text = "Estou%20interessado%20em%20tomar%20emprestado%20o%20livro%20".$nameBook;
                                            echo '<a href="https://wa.me/5513996895339?text='.$text.'" target="_blank" aria-label="Chat on WhatsApp"><img src="../images/ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png" alt="Chat on WhatsApp"></a>';
                                        ?>

                                        <div id="full-description"><h1>HELLO WORD FILHO DA PUTA</h1></div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            }
                        }
                    
                    ?>  
                    <br><br><br>
                    </div>
                    <div class="controllers">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" id="prev" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" id="next" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

<script src="../script/jquery-3.6.1.js"></script>
<script src="../script/description-book.js"></script>
</body>
</html>