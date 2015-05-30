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
			<!-- Datos personales -->
			<div class="form-left col-md-offset-4 col-md-4">
				<h4>1 - Datos personales</h4>
				<hr>
				<div class="form-group">
					<label>Nombre de usuario*</label>
					<input type="text" class="form-control input-sm" id="Username" name="Username" required>
					{if isset($usernameError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
				</div>
				<div class="form-group">
					<label>Nombre*</label>
					<input type="text" class="form-control input-sm" id="Name" name="Name" required>
					{if isset($nameError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
				</div>
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" class="form-control input-sm" id="Surname" name="Surname">
				</div>
				<div class="form-group">
					<label>Dirección</label>
					<input type="text" class="form-control input-sm" id="Address" name="Address">
				</div>
				<div class="form-group">
					<label>Email*</label>
					<input type="email" class="form-control input-sm" id="Email" name="Email" placeholder="address@example.com" required>
					{if isset($emailError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
				</div>
				<div class="form-group">
					<label>Teléfono</label>
					<input type="text" class="form-control input-sm" id="Telephone" name="Telephone">
				</div>
				<div class="form-group">
					<label>Fecha de nacimiento</label>
					<input type="text" class="form-control input-sm" id="Birthday" name="Birthday" placeholder="DD/MM/YYYY">
				</div>
				<div class="form-group" id="PassGroup">
					<label>Contraseña*</label>
					<input type="password" class="form-control input-sm" id="Password" name="Password" required>
					{if isset($passError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
				</div>
				<div class="form-group" id="RepeatPassGroup">
					<label>Repetir contraseña*</label>
					<input type="password" class="form-control input-sm" id="RepeatPassword" name="RepeatPassword" onkeyup="validate()" required>
					<span id="passError">&nbsp</span>
					{if isset($repassError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
					{if isset($cmppassError)}
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					{/if}
				</div>
				<button id="Registrar" type="submit" class="btn btn-primary disabled">Siguiente</button>
				<a href="/tracker.php" class="btn btn-default">Volver a inicio</a>
			</div>
		</div>
	</form>
	<script type="text/javascript">
		function validate(){
			if(document.getElementById("RepeatPassword").value.length > 0 ){
				var d = document.getElementById("Registrar");
				if(document.getElementById("Password").value != document.getElementById("RepeatPassword").value){
					document.getElementById("passError").innerHTML = "<span style=\"color:red\">Las contraseñas no coinciden<\/span>"
					document.getElementById("RepeatPassGroup").className = "form-group has-error";
					d.className = d.className + " disabled";
				}
				else{
					document.getElementById("passError").innerHTML = "<span style=\"color:green\">Las contraseñas coinciden<\/span>";
					document.getElementById("RepeatPassGroup").className = "form-group";
					d.className = "btn btn-primary";
				}
			}
			else{
				document.getElementById("passError").innerHTML = "&nbsp";
				document.getElementById("RepeatPassGroup").className = "form-group";
				document.getElementById("Registrar").className = "btn btn-primary disabled";
			}
		}
	</script>
</body>
</html>