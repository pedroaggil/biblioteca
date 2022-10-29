<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
		<!-- CSS -->
		<link rel="stylesheet" href="../../style/style-adm-book.css" />
		<!-- Favicon -->
		<link rel="icon" type="imagem/png" href="../../images/icon.png " />

		<title>Controle de Livros</title>
	</head>

<body>
<main>
	<div class="box">
		<h3>Controle de Livros</h3>
		<div class="arrumar">
	<div class="container" style="text-align: left">
		<div class="row">
			<div class="comunista col-1">
				<span class="negrito">Título</span>
			</div>
			<div class="col-3">
                <span class="negrito">Disp.</span>
            </div>
			<div class="col-2">
				<span class="negrito" style="margin: 0  0 400px 0;">Autor</span>
			</div>
			<div class="col-4 colunalink">
				<a href='#'><img style='width: 30px; height: 30px; background-color:#F2955E; border-radius:3rem;' src='../../images/mais.png' alt='Alterar registro'></a></div>
			</div>
		</div>
	</div>
		<?php include '../../database/database.php';

				$search =  "SELECT *
							FROM tb_book";
				$result = $mysqli->query($search);

				while ($row = $result -> fetch_object()) {
					echo "
					<div class='arrumar2'>
						<div class='row'>
							<div class='col-3'>
								<span>$row->nm_title</span>
							</div>	
							<div class='col-1'>
                                <span>$row->st_availability</span>
							</div>
							<div class='col-4'>
								<span>$row->nm_author</span>
							</div>
						
							<div class='col-1'>
								<button><a href='../../script/delete-book.php?book=$row->id_book'><img style='width: 20px; height: 20px;' src='../../images/excluir.png' alt='Deletar registro'></a></button>
							</div>
							<div class='col-1'>
								<button><a href='availability.php?book=$row->id_book'><img style='width: 20px; height: 20px;' src='../../images/editar.png' alt='Alterar registro'></a></button>
							</div>
						</div>
					</div>
					";				
				}
			?>
</div>
</main>
<br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>