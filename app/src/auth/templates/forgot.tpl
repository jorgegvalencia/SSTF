<!DOCTYPE html>
<html>
<head>
	<title>SSTF - Grupo 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ISW2-Grupo5">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Custom styles -->
	<style>
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: white;
			text-align: center;
		}
		.form-signin {
			max-width: 330px;
			padding: 15px;
			padding-bottom: 5px;
			margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="text"] {
			margin-bottom: 10px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.btn-register{
			width: 300px;
			margin-bottom: 5px;
		}
	</style>
</head>
<body class=>
	<div class="container">
		{if isset($mailSended)}
			<h3 class="form-signin-heading">Correo de recuperación de contraseña mandado a la dirección:</h3>
			<p>{$mailSended}</p>
			<a href="login" class="btn btn-primary btn-register" type="submit">Iniciar sesión</a>
		{else}
		{if isset($failError)}
		<p class="text-danger">Se ha producido un error en el proceso. Intentelo de nuevo más tarde</p>
		{/if}
		{if isset($failError)}
		<p class="text-danger">La dirección de envio no es una dirección valida</p>
		{/if}
		<form class="form-signin" method='post' action=''>
			<h3 class="form-signin-heading">Sistema Simplificado de Tracker Financiero</h3>
			<hr>
			<label for="inputUser" class="sr-only">Nobre de usuario o E-mail</label>
			<input type="text" name="user" id="inputUser" class="form-control" placeholder="Nobre de usuario o E-mail" required>
			{if isset($noUserError)}
				<p class="text-danger">El usuario o e-mail no existe</p>
			{/if}
			<button class="btn btn-primary btn-block" type="submit">Recuperar contraseña</button>
		</form>
		{/if}
	</div>
	<footer class="footer">
	<p>&copy; Grupo05 - ISW2 2014-2015</p>
	</footer>
</body>
</html>