<?php include('../../database/database.php');

    $book = $_GET['book'];
    $search =  "SELECT * 
                FROM tb_book
                WHERE id_book = ". $book;

    if ($sql = $mysqli->query($search)) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Solaris</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../../style/new-book.css">
  <link rel="icon" type="imagem/png" href="../images/icon.png">
</head>
<body>

 <!-- título -->
  <div class="title">
  	<h4 style="font-weight: 600;">Atualização de livro cadastrado</h4>
  	<p>Sou um parágrafo. Clique aqui para editar e adicionar o seu próprio texto</p>
  	<hr class="divider">
  </div>
  <!-- título -->
  <!-- formulário -->
		<form class="form-horizontal" method="post" action="../../script/new-book.php">
		    <div class="form">
                <div class="text">
                    <h5 style="font-weight: 600;">Preencha as informações necessárias para a atualização do livro no sistema</h5>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Título *</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->nm_title; ?>" name="title" class="form-control" id="title" placeholder="Título" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="author" class="col-sm-3 control-label">Autor *</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->nm_author; ?>" name="author" class="form-control" id="author" placeholder="Autor" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="publisher" class="col-sm-3 control-label">Editora</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->ds_publisher; ?>" name="publisher" class="form-control" id="publisher" placeholder="Editora">
                    </div>
                </div>

                <div class="form-group">
                    <label for="collection" class="col-sm-3 control-label">Coleção</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->ds_collection; ?>" name="collection" class="form-control" id="collection" placeholder="Coleção">
                    </div>
                </div>

                <div class="form-group">
                    <label for="subtitle" class="col-sm-3 control-label">Subtítulo</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->nm_subtitle; ?>" name="subtitle" class="form-control" id="subtitle" placeholder="Subtítulo">
                    </div>
                </div>

                <div class="form-group">
                    <label for="synopsis" class="col-sm-3 control-label">Sinopse</label>
                    <div class="col-sm-10">
                        <textarea name="synopsis" value="<?= $sql->ds_synopsis; ?>" id="synopsis" placeholder="Sinopse"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="translator" class="col-sm-3 control-label">Tradutor(a)</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->nm_translator; ?>" name="translator" class="form-control" placeholder="Tradutor(a)" id="translator">
                    </div>
                </div>

                <div class="form-group">
                    <label for="launch" class="col-sm-3 control-label">Data de lançamento</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->dt_launch; ?>" name="launch" class="form-control" placeholder="Lançamento" id="launch">
                    </div>
                </div>

                <div class="form-group">
                    <label for="original__title" class="col-sm-3 control-label">Título original</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->nm_original_title; ?>" name="original__title" placeholder="Título original" class="form-control" id="original__title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="date__translate" class="col-sm-3 control-label">Data de tradução</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->dt_translate_date; ?>" name="date__translate" class="form-control" placeholder="Data de tradução" id="date__translate">
                    </div>
                </div>

                <div class="form-group">
                    <label for="reviewer" class="col-sm-3 control-label">Revisor(a)</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $sql->nm_reviewer; ?>" name="reviewer" class="form-control" placeholder="Revisor(a)" id="reviewer">
                    </div>
                </div>

                <div class="form-group">
                    <label for="isbn" class="col-sm-3 control-label">ISBN</label>
                    <div class="col-sm-10">
                        <input type="number" value="<?= $sql->nr_isbn; ?>" name="isbn" class="form-control" placeholder="ISBN" id="isbn">
                    </div>
                </div>

                <div class="form-group">
                    <label for="genre" class="col-sm-3 control-label">Gênero</label>
                    <div class="genre col-sm-10">
                        <select name="genre" required>
                            <option <?php if ($sql->ds_genre == "null") { echo 'selected'; } ?> disabled value="null"> -- Selecione -- </option>
                            <option <?php if ($sql->ds_genre == "Romance") { echo 'selected'; } ?> value="Romance">Romance</option>
                            <option <?php if ($sql->ds_genre == "Administração") { echo 'selected'; } ?> value="Administração">Administração</option>
                            <option <?php if ($sql->ds_genre == "Artes") { echo 'selected'; } ?> value="Artes">Artes</option>
                            <option <?php if ($sql->ds_genre == "Aventura") { echo 'selected'; } ?> value="Aventura">Aventura</option>
                            <option <?php if ($sql->ds_genre == "Biografia e memórias") { echo 'selected'; } ?> value="Biografia e memórias">Biografia e memórias</option>
                            <option <?php if ($sql->ds_genre == "Ciências") { echo 'selected'; } ?> value="Ciências">Ciências</option>
                            <option <?php if ($sql->ds_genre == "Estudos") { echo 'selected'; } ?> value="Estudos">Estudos</option>
                            <option <?php if ($sql->ds_genre == "Contos e crônicas") { echo 'selected'; } ?> value="Contos e crônicas">Contos e crônicas</option>
                            <option <?php if ($sql->ds_genre == "Dicionários e manuais") { echo 'selected'; } ?> value="Dicionários e manuais">Dicionários e manuais</option>
                            <option <?php if ($sql->ds_genre == "Direito") { echo 'selected'; } ?> value="Direito">Direito</option>
                            <option <?php if ($sql->ds_genre == "Diversos") { echo 'selected'; } ?> value="Diversos">Diversos</option>
                            <option <?php if ($sql->ds_genre == "Economia") { echo 'selected'; } ?> value="Economia">Economia</option>
                            <option <?php if ($sql->ds_genre == "Ensaios") { echo 'selected'; } ?> value="Ensaios">Ensaios</option>
                            <option <?php if ($sql->ds_genre == "Ficção científica") { echo 'selected'; } ?> value="Ficção científica">Ficção científica</option>
                            <option <?php if ($sql->ds_genre == "Ficção fantástica") { echo 'selected'; } ?> value="Ficção fantástica">Ficção fantástica</option>
                            <option <?php if ($sql->ds_genre == "Suspense") { echo 'selected'; } ?> value="Suspense">Suspense</option>
                            <option <?php if ($sql->ds_genre == "História") { echo 'selected'; } ?> value="História">História</option>
                            <option <?php if ($sql->ds_genre == "Filosofia") { echo 'selected'; } ?> value="Filosofia">Filosofia</option>
                            <option <?php if ($sql->ds_genre == "Humor") { echo 'selected'; } ?> value="Humor">Humor</option>
                            <option <?php if ($sql->ds_genre == "Infanto-juvenil") { echo 'selected'; } ?> value="Infato-juvenil">Infato-juvenil</option>
                            <option <?php if ($sql->ds_genre == "Linguística") { echo 'selected'; } ?> value="Linguística">Linguística</option>
                            <option <?php if ($sql->ds_genre == "Medicina") { echo 'selected'; } ?> value="Medicina">Medicina</option>
                            <option <?php if ($sql->ds_genre == "Poesia") { echo 'selected'; } ?> value="Poesia">Poesia</option>
                            <option <?php if ($sql->ds_genre == "Policial") { echo 'selected'; } ?> value="Policial">Policial</option>
                            <option <?php if ($sql->ds_genre == "Psicologia") { echo 'selected'; } ?> value="Psicologia">Psicologia</option>
                            <option <?php if ($sql->ds_genre == "Religião") { echo 'selected'; } ?> value="Religião">Religião</option>
                            <option <?php if ($sql->ds_genre == "Teoria e crítica") { echo 'selected'; } ?> value="Teoria e crítica">Teoria e crítica</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-sm-4 control-label">Imagem ilustrativa (capa)</label>
                    <div class="col-sm-10">
                        <input type="file" <?php $img = $sql->il_image; if ($img != null) { echo 'value="'.$img.'"'; } ?> name="image" class="form-control" accept="image/*" placeholder="Imagem ilustrativa" id="image">
                    </div>
                </div>

                <br>
                
                <div class="footer">
                    <button type="reset" value="Reset">Limpar</button>
                    <button type="submit">Prosseguir</button>
                </div>

            </div>	
        </form>

	<!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>

<?php 

    } else {
        header('Location: index.php');
    }

?>