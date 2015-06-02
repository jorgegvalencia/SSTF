<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 23:17:56
         compiled from "auth/templates/forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1537513899556af76ea7ceb0-86516776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6def1312a8bf2addb52f93b8f44953e8158ee654' => 
    array (
      0 => 'auth/templates/forgot.tpl',
      1 => 1433278814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537513899556af76ea7ceb0-86516776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556af76ed7e052_68631490',
  'variables' => 
  array (
    'mailSended' => 0,
    'failError' => 0,
    'noUserError' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556af76ed7e052_68631490')) {function content_556af76ed7e052_68631490($_smarty_tpl) {?><!DOCTYPE html>
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
		<?php if (isset($_smarty_tpl->tpl_vars['mailSended']->value)) {?>
			<h3 class="form-signin-heading">Correo de recuperación de contraseña mandado a la dirección:</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['mailSended']->value;?>
</p>
			<a href="login" class="btn btn-primary btn-register" type="submit">Iniciar sesión</a>
		<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['failError']->value)) {?>
		<p class="text-danger">Se ha producido un error en el proceso. Intentelo de nuevo más tarde</p>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['failError']->value)) {?>
		<p class="text-danger">La dirección de envio no es una dirección valida</p>
		<?php }?>
		<form class="form-signin" method='post' action=''>
			<h3 class="form-signin-heading">Sistema Simplificado de Tracker Financiero</h3>
			<hr>
			<label for="inputUser" class="sr-only">Nombre de usuario o E-mail</label>
			<input type="text" name="user" id="inputUser" class="form-control" placeholder="Nombre de usuario o E-mail" required>
			<?php if (isset($_smarty_tpl->tpl_vars['noUserError']->value)) {?>
				<p class="text-danger">El usuario o e-mail no existe</p>
			<?php }?>
			<button class="btn btn-primary btn-block" type="submit">Recuperar contraseña</button>
		</form>
		<?php }?>
	</div>
	<footer class="footer">
	<p>&copy; Grupo05 - ISW2 2014-2015</p>
	</footer>
</body>
</html><?php }} ?>
