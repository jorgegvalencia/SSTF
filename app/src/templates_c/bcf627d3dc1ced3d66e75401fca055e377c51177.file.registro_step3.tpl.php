<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-10 18:07:45
         compiled from "./templates/registro_step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:613087484554e3243552a30-92429696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf627d3dc1ced3d66e75401fca055e377c51177' => 
    array (
      0 => './templates/registro_step3.tpl',
      1 => 1431274034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613087484554e3243552a30-92429696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554e32435d0cd8_75502896',
  'variables' => 
  array (
    'termsError' => 0,
    'registrationError' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554e32435d0cd8_75502896')) {function content_554e32435d0cd8_75502896($_smarty_tpl) {?><!DOCTYPE html>
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
					<?php if (isset($_smarty_tpl->tpl_vars['termsError']->value)) {?>
						<p class="text-danger">Debe aceptar los términos y condiciones</p>
					<?php }?>
				</div>
				<br>
				<button id="Registrar" type="submit" class="btn btn-primary">Registrarse</button>
				<a href="/tracker.php" class="btn btn-default">Volver a inicio</a>
				<?php if (isset($_smarty_tpl->tpl_vars['registrationError']->value)) {?>
					<p class="text-danger">Se ha produccido un error durante el registro, por favor, inténtelo de nuevo</p>
				<?php }?>
			</div>
		</form>
	</div>
</body>
</html><?php }} ?>
