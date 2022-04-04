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

	<div class="box-cadastrar">
		<form class="form-signin" action="php/cadastro_usuario.php" method="POST">
			<img class="mb-4" src="img/login.png" alt="img-login" width="110" height="120" />
			<h3>Cadastrar</h3>

			<input type="text" name="nome" id="input" class="btn-dark form-control" placeholder="Usuário" required autofocus />
			<input type="password" name="senha" id="inputPassword" class="btn-dark form-control" placeholder="Senha" required />

			<p>Já é cadastrado? <a href="index.php">Entre aqui!</a></p>
			<button class="btn btn-lg btn-block" type="submit">Cadastrar</button>
		</form>
	</div>

</body>

</html>