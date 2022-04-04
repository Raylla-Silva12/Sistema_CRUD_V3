<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Raylla S." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" />

	<title>Login</title>
</head>

<body>
	<h1>Alunos da Etec de Itanhaém</h1>

	<center>

		<div class="box-user">

			<?php
			include('php/conectar.php');

			$consulta = "SELECT * FROM tb_aluno";
			$result = $mysqli->query($consulta);

			while ($row = $result->fetch_object()) {
				echo "<br>";
				echo "<span id='id'>RM</span>: $row->cd_rm <br>
				<span id='id'>Nome</span>: <span class='nome'> $row->nm_nome </span><br>
				<span id='id'>Idade</span>: $row->nr_idade <br>";

			?>

				<br>

			<?php
				echo "<hr>";
			}

			$mysqli->close(); 
			?>

		</div>

	</center>

</body>

</html>