<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-10 18:23:13
         compiled from "./templates/registro_step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122460485554b7cf2ccbf11-19125039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8746b83c890456b7ecdbad8e79baf877315d4fd' => 
    array (
      0 => './templates/registro_step1.tpl',
      1 => 1431274217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122460485554b7cf2ccbf11-19125039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554b7cf2ec0cf3_97826281',
  'variables' => 
  array (
    'usernameError' => 0,
    'nameError' => 0,
    'emailError' => 0,
    'passError' => 0,
    'repassError' => 0,
    'cmppassError' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b7cf2ec0cf3_97826281')) {function content_554b7cf2ec0cf3_97826281($_smarty_tpl) {?><!DOCTYPE html>
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
					<?php if (isset($_smarty_tpl->tpl_vars['usernameError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
				</div>
				<div class="form-group">
					<label>Nombre*</label>
					<input type="text" class="form-control input-sm" id="Name" name="Name" required>
					<?php if (isset($_smarty_tpl->tpl_vars['nameError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
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
					<?php if (isset($_smarty_tpl->tpl_vars['emailError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
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
					<?php if (isset($_smarty_tpl->tpl_vars['passError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
				</div>
				<div class="form-group" id="RepeatPassGroup">
					<label>Repetir contraseña*</label>
					<input type="password" class="form-control input-sm" id="RepeatPassword" name="RepeatPassword" onkeyup="validate()" required>
					<span id="passError">&nbsp</span>
					<?php if (isset($_smarty_tpl->tpl_vars['repassError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['cmppassError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
				</div>
				<button id="Registrar" type="submit" class="btn btn-primary disabled">Siguiente</button>
				<a href="/tracker.php" class="btn btn-default">Volver a inicio</a>
			</div>
		</div>
	</form>
	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
