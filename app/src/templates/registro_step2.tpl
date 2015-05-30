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
			<!-- Datos financieros -->
			<div class="form-left col-md-offset-4 col-md-4">
				<h4>2 - Datos financieros</h4>
				<hr>
				<div class="form-group">
					<label>Profesión</label>
					<input type="text" class="form-control input-sm" id="Profession" name="Profession">
				</div>
				<div class="form-group">
					<label>Ocupacion</label>
					<input type="text" class="form-control input-sm" id="Ocuppation" name="Ocuppation">
				</div>
				<div class="form-group">
					<label>Lugar de trabajo</label>
					<input type="text" class="form-control input-sm" id="WorkPlace" name="WorkPlace">
				</div>
				<div class="form-group">
					<label>Cargo</label>
					<input type="text" class="form-control input-sm" id="Position" name="Position">
				</div>
				<div class="form-group">
					<label>Income Anual</label>
					<br>
					<label class="radio-inline">
						<input type="radio" name="income" id="incomeHigh" value="2"> Alto
					</label>
					<label class="radio-inline">
						<input type="radio" name="income" id="incomeMedium" value="1" checked="checked"> Medio
					</label>
					<label class="radio-inline">
						<input type="radio" name="income" id="incomeLow" value="0"> Bajo
					</label>
					{if isset($incomeError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
				</div>
				<br>
				<button id="Registrar" type="submit" class="btn btn-primary">Siguiente</button>
				<a href="/tracker.php" class="btn btn-default">Volver a inicio</a>
			</div>
		</form>
	</div>
</body>
</html>