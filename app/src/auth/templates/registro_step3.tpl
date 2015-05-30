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
			padding-top: 20px;
			padding-bottom: 40px;
			background-color: white;
			text-align: center;
			font-size: small;
		}
		.form-horizontal{
			width: 250px;
			margin: 0 auto;
		}
		.form-group{
			margin-bottom: 5px;
			width: 300px;
		}
		.form-left{
			text-align: left;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3> Registrar una cuenta </h3>
		<hr>
		<form class="row form-signin" method="post" action="">
			<div class="form-left col-md-offset-4 col-md-4">
				<h4>3 - Términos de servicio y suscripciones</h4>
				<hr>
				<label> Términos de uso </label>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic id facilis, qui dolor modi fugit blanditiis quas sapiente minima sint reprehenderit mollitia, iste officia velit cupiditate nam saepe ducimus? Voluptatibus!</p>
				<div class="checkbox">
					<label>
						<input name="Newsletters" type="checkbox">
						Suscribirse a Newsletters
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input name="Terms" type="checkbox" required>
						He leido y acepto los términos y condiciones del servicio*
					</label>
					{if isset($termsError)}
						<p class="text-danger">Debe aceptar los términos y condiciones</p>
					{/if}
				</div>
				<br>
				<button id="Registrar" type="submit" class="btn btn-primary">Registrarse</button>
				<a href="/tracker.php" class="btn btn-default">Volver a inicio</a>
				{if isset($registrationError)}
					<p class="text-danger">Se ha produccido un error durante el registro, por favor, inténtelo de nuevo</p>
				{/if}
			</div>
		</form>
	</div>
</body>
</html>