<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 22:31:40
         compiled from "./templates/favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168877757553e8c66e3cfa1-34510421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ef2ba2c34dc1ece450643ba2058a777b086913b' => 
    array (
      0 => './templates/favoritos.tpl',
      1 => 1430166694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168877757553e8c66e3cfa1-34510421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553e8c66eec823_07983233',
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'favoritesError' => 0,
    'favoritesEmpty' => 0,
    'acciones' => 0,
    'accion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e8c66eec823_07983233')) {function content_553e8c66eec823_07983233($_smarty_tpl) {?><!DOCTYPE html>
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
		.list-group-item{
			font-size: 13px;
			/*background-color: #D9EDF7;*/
			border-color: #BCE8F1;
			color: #31708F;
		}
		.col-sm-3{
			text-align: right;
		}
		ul{
			margin: 10px auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<header>
			<h2>Sistema Simplificado de Tracker Financiero</h2>
			<h4 id='username' data-userid='<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h4>
		</header>
		<div class="row">
			<nav class="col-md-2">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="home.php">Principal</a></li>
					<li role="presentation" class="active"><a href="favorites.php">Favoritos</a></li>
				</ul>
			</nav>
			<section class="col-md-10">
				<?php if (isset($_smarty_tpl->tpl_vars['favoritesError']->value)) {?>
					<p class="text-danger">Se ha produccido un error en la base de datos, intentelo de nuevo más tarde</p>
				<?php } elseif (isset($_smarty_tpl->tpl_vars['favoritesEmpty']->value)) {?>
					<h4>Usted no tiene favoritos</h4>
				<?php } else { ?>
					<div class="form-group">
					<ul class="list-group">
						<?php  $_smarty_tpl->tpl_vars['accion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accion']->key => $_smarty_tpl->tpl_vars['accion']->value) {
$_smarty_tpl->tpl_vars['accion']->_loop = true;
?>
						<li class="list-group-item">
							<div class="row">
								<div class="col-sm-9">
									<label> Nombre: </label><span><?php echo $_smarty_tpl->tpl_vars['accion']->value['nombre'];?>
</span>
									<label> Código: </label><span><?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
</span>
									<label> Valor actual: </label><span><?php echo $_smarty_tpl->tpl_vars['accion']->value['valor_actual'];?>
</span>
								</div>
								<div class="col-sm-3">	
									<button class="btn btn-primary">Consultar</button>
									<button class="btn btn-danger">Eliminar</button>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>
					</div>
				<?php }?>

			</section>
		</div>
	</div>
</body>
</html><?php }} ?>
