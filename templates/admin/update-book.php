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
  	<h4 style="font-weight: 600;">Atualização de livro</h4>
  	<p>Sou um parágrafo. Clique aqui para editar e adicionar o seu próprio texto</p>
  	<hr class="divider">
  </div>
  <!-- título -->
  <!-- formulário -->
		<form class="form-horizontal" method="post" action="../../script/update-book.php">
		    <div class="form">
                <div class="text">
                    <h5 style="font-weight: 600;">Preencha as informações necessárias para a atualização do livro no sistema</h5>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Título *</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Título" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="author" class="col-sm-3 control-label">Autor *</label>
                    <div class="col-sm-10">
                        <input type="text" name="author" class="form-control" id="author" placeholder="Autor" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="publisher" class="col-sm-3 control-label">Editora</label>
                    <div class="col-sm-10">
                        <input type="text" name="publisher" class="form-control" id="publisher" placeholder="Editora">
                    </div>
                </div>

                <div class="form-group">
                    <label for="collection" class="col-sm-3 control-label">Coleção</label>
                    <div class="col-sm-10">
                        <input type="text" name="collection" class="form-control" id="collection" placeholder="Coleção">
                    </div>
                </div>

                <div class="form-group">
                    <label for="subtitle" class="col-sm-3 control-label">Subtítulo</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtítulo">
                    </div>
                </div>

                <div class="form-group">
                    <label for="synopsis" class="col-sm-3 control-label">Sinopse *</label>
                    <div class="col-sm-10">
                        <textarea name="synopsis" id="synopsis" placeholder="Sinopse" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="translator" class="col-sm-3 control-label">Tradutor(a)</label>
                    <div class="col-sm-10">
                        <input type="text" name="translator" class="form-control" placeholder="Tradutor(a)" id="translator">
                    </div>
                </div>

                <div class="form-group">
                    <label for="launch" class="col-sm-3 control-label">Data de lançamento</label>
                    <div class="col-sm-10">
                        <input type="text" name="launch" class="form-control" placeholder="Lançamento" id="launch">
                    </div>
                </div>

                <div class="form-group">
                    <label for="original__title" class="col-sm-3 control-label">Título original</label>
                    <div class="col-sm-10">
                        <input type="text" name="original__title" placeholder="Título original" class="form-control" id="original__title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="date__translate" class="col-sm-3 control-label">Data de tradução</label>
                    <div class="col-sm-10">
                        <input type="text" name="date__translate" class="form-control" placeholder="Data de tradução" id="date__translate">
                    </div>
                </div>

                <div class="form-group">
                    <label for="reviewer" class="col-sm-3 control-label">Revisor(a)</label>
                    <div class="col-sm-10">
                        <input type="text" name="reviewer" class="form-control" placeholder="Revisor(a)" id="reviewer">
                    </div>
                </div>

                <div class="form-group">
                    <label for="isbn" class="col-sm-3 control-label">ISBN</label>
                    <div class="col-sm-10">
                        <input type="number" name="isbn" class="form-control" placeholder="ISBN" id="isbn">
                    </div>
                </div>

                <div class="form-group">
                    <label for="genre" class="col-sm-3 control-label">Gênero *</label>
                    <div class="genre col-sm-10">
                        <select name="genre" required>
                            <option selected disabled value="null"> -- Selecione -- </option>
                            <option value="Romance">Romance</option>
                            <option value="Administração">Administração</option>
                            <option value="Artes">Artes</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Biografia e memórias">Biografia e memórias</option>
                            <option value="Ciências">Ciências</option>
                            <option value="Estudos">Estudos</option>
                            <option value="Contos e crônicas">Contos e crônicas</option>
                            <option value="Dicionários e manuais">Dicionários e manuais</option>
                            <option value="Direito">Direito</option>
                            <option value="Diversos">Diversos</option>
                            <option value="Economia">Economia</option>
                            <option value="Ensaios">Ensaios</option>
                            <option value="Ficção científica">Ficção científica</option>
                            <option value="Ficção fantástica">Ficção fantástica</option>
                            <option value="Suspense">Suspense</option>
                            <option value="História">História</option>
                            <option value="Filosofia">Filosofia</option>
                            <option value="Humor">Humor</option>
                            <option value="Infato-juvenil">Infato-juvenil</option>
                            <option value="Linguística">Linguística</option>
                            <option value="Medicina">Medicina</option>
                            <option value="Poesia">Poesia</option>
                            <option value="Policial">Policial</option>
                            <option value="Psicologia">Psicologia</option>
                            <option value="Religião">Religião</option>
                            <option value="Teoria e crítica">Teoria e crítica</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-sm-4 control-label">Imagem ilustrativa (capa)</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" accept="image/*" placeholder="Imagem ilustrativa" id="image">
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