<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-07 17:35:13
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353285920554b7d1b7c5545-28463717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af99efe2b3640ae13d6f5b9ae416e33a7b59a36b' => 
    array (
      0 => './templates/login.tpl',
      1 => 1431012714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353285920554b7d1b7c5545-28463717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554b7d1b9b4a30_87268165',
  'variables' => 
  array (
    'userError' => 0,
    'noUserError' => 0,
    'passError' => 0,
    'failPassError' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b7d1b9b4a30_87268165')) {function content_554b7d1b9b4a30_87268165($_smarty_tpl) {?><!DOCTYPE html>
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
			<?php if (isset($_smarty_tpl->tpl_vars['userError']->value)) {?>
				<p class="text-danger">Debe introducir su nombre de usuario</p>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['noUserError']->value)) {?>
				<p class="text-danger">El usuario no existe</p>
			<?php }?>
			<label for="inputPassword" class="sr-only">Contraseña</label>
			<input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
			<?php if (isset($_smarty_tpl->tpl_vars['passError']->value)) {?>
				<p class="text-danger">Debe introducir su contraseña</p>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['failPassError']->value)) {?>
				<p class="text-danger">Contraseña incorrecta</p>
			<?php }?>
			<button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
		</form>
		<a href="registration/step1" class="btn btn-primary btn-register" type="submit">Registrarse</a>
	</div>
	<footer class="footer">
	<p>&copy; Grupo05 - ISW2 2014-2015</p>
	</footer>
</body>
</html><?php }} ?>
