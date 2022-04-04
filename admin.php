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

		<div class="box-admin">
			<br>

			<a href="php/inserir.php">
				<img style="width: 3vw; height: 6vh;" src="img/adicionar.png">
				<span id="insert">Inserir novo registro</span>
			</a>

			<br>
			<hr><br>
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
				<a href="php/apagar.php?aluno=<?php echo "$row->cd_rm"; ?>"><img style="width: 2vw; height: 4vh;" src="img/excluir.png" alt="Deletar registro"></a> 
				<a href="php/alterar.php?aluno=<?php echo "$row->cd_rm"; ?>"><img style="width: 2vw; height: 4vh;" src="img/editar.png" alt="Alterar registro"></a> 
			<?php
				echo "<hr>";
			}

			$mysqli->close(); 
			?>
			<br>

			<a href="php/inserir.php">
				<img style="width: 3vw; height: 6vh;" src="img/adicionar.png">
				<span id="insert">Inserir novo registro</span>
			</a>

		</div>

	</center>

</body>

</html>