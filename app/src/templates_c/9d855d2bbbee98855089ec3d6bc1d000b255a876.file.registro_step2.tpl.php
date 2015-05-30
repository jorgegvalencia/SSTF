<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-31 00:41:33
         compiled from "auth/templates/registro_step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724917913556a3c9d397786-73768918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d855d2bbbee98855089ec3d6bc1d000b255a876' => 
    array (
      0 => 'auth/templates/registro_step2.tpl',
      1 => 1432999379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724917913556a3c9d397786-73768918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'incomeError' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556a3c9d45c619_15029147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556a3c9d45c619_15029147')) {function content_556a3c9d45c619_15029147($_smarty_tpl) {?><!DOCTYPE html>
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
					<?php if (isset($_smarty_tpl->tpl_vars['incomeError']->value)) {?>
						<p class="text-danger">Es obligatorio rellenar éste campo</p>
					<?php }?>
				</div>
				<br>
				<button id="Registrar" type="submit" class="btn btn-primary">Siguiente</button>
				<a href="/tracker.php" class="btn btn-default">Volver a inicio</a>
			</div>
		</form>
	</div>
</body>
</html><?php }} ?>
