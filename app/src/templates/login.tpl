<!DOCTYPE html>
<html>
<head>
	<title>SSTF - Grupo 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ISW2-Grupo5">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Bootstrap Form Helpers -->
	<link href="css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
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
			margin-bottom: -1px;
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
		<form class="form-signin" method='post' action=''>
			<h3 class="form-signin-heading">Sistema Simplificado de Tracker Financiero</h3>
			<hr>
			<label for="inputUser" class="sr-only">Nombre de usuario</label>
			<input type="text" name="user" id="inputUser" class="form-control" placeholder="Nombre de usuario" required>
			{if isset($userError)}
				<p class="text-danger">Debe introducir su nombre de usuario</p>
			{/if}
			{if isset($noUserError)}
				<p class="text-danger">El usuario no existe</p>
			{/if}
			<label for="inputPassword" class="sr-only">Contraseña</label>
			<input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
			{if isset($passError)}
				<p class="text-danger">Debe introducir su contraseña</p>
			{/if}
			{if isset($failPassError)}
				<p class="text-danger">Contraseña incorrecta</p>
			{/if}
			<button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
		</form>
		<a href="registration/step1" class="btn btn-primary btn-register" type="submit">Registrarse</a>
	</div>
	<footer class="footer">
	<p>&copy; Grupo05 - ISW2 2014-2015</p>
	</footer>
</body>
</html>