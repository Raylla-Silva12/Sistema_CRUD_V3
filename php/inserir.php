<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Raylla S." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">

	<!-- bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- CSS -->
	<link rel="stylesheet" href="../css/style.css" />

	<title>Login</title>
</head>

<body>

	<div class="box-inserir">
		<h2>Cadastrar Aluno</h2>

		<?php include('conectar.php');

		$sql = "SELECT * FROM tb_aluno";

		if ($lista = $mysqli->query($sql)) {
		?>

			<form class="form-signin" action="inserir_form.php" method="POST">
				<input type="number" name="rmAluno" min="10000" id="input" class="btn-dark form-control" placeholder="Usuário" required autofocus />
				<input type="text" name="nomeAluno" id="input" class="btn-dark form-control" placeholder="Nome" required autofocus />
				<input type="number" name="idadeAluno" min="0" id="input" class="btn-dark form-control" placeholder="Idade" required />

				<br>
				<button class="btn btn-lg btn-block" type="submit">INSERIR</button>
				<a href="javascript:history.go(-1)">VOLTAR</a>
			</form>

		<?php
		}
		?>
		<br>
	</div>

</body>

</html>