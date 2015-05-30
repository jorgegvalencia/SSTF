<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-10 19:55:19
         compiled from "./templates/favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753496006554b83e6177d19-83744529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9db53e9c318f95219a130aef9c192613348db3f' => 
    array (
      0 => './templates/favoritos.tpl',
      1 => 1431189363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753496006554b83e6177d19-83744529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554b83e63d3b84_74693434',
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
<?php if ($_valid && !is_callable('content_554b83e63d3b84_74693434')) {function content_554b83e63d3b84_74693434($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>SSTF - Grupo 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ISW2-Grupo5">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- Bootstrap Form Helpers -->
	<link href="css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
	<!-- Custom styles -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/favorites.js"><?php echo '</script'; ?>
>
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
		.deleted{
			text-align: center;
		}
		ul{
			margin: 10px auto;
		}
				#msgFav{
			z-index:1000;
			text-align: center;
			display: none;
			position:fixed;
			padding: 10px 20px;
			top: 50px;
			border-radius:10px;
		   -webkit-border-radius:10px;
		   -moz-border-radius:10px;
		}
	</style>
</head>
<body>
		<div id="msgFav" class="bg-danger"></div>
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
					<li role="presentation"><a href="/tracker.php">Principal</a></li>
					<li role="presentation" class="active"><a href="">Favoritos</a></li>
					<li role="presentation"><a href="/tracker.php/logout">Desconectar</a></li>
				</ul>
			</nav>
			<section class="col-md-10" id="wrapContent">
				<?php if (isset($_smarty_tpl->tpl_vars['favoritesError']->value)) {?>
					<p class="text-danger">Se ha produccido un error en la base de datos, intentelo de nuevo más tarde</p>
				<?php } elseif (isset($_smarty_tpl->tpl_vars['favoritesEmpty']->value)) {?>
					<h4>Usted no tiene favoritos</h4>
				<?php } else { ?>
					<div class="form-group" id="wrapLista">
					<ul class="list-group" id="lista">
						<?php  $_smarty_tpl->tpl_vars['accion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accion']->key => $_smarty_tpl->tpl_vars['accion']->value) {
$_smarty_tpl->tpl_vars['accion']->_loop = true;
?>
						<li class="list-group-item" id="accion<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">
							<div class="row" id="data<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">
								<div class="col-md-2">
									<label> Nombre:</label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['nombre'];?>
</span>
								</div>
								<div class="col-md-2">
									<label> Código: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
</span>
								</div>
								<div class="col-md-2">
									<label> Valor actual: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['valor_actual'];?>
</span>
								</div>
								<div class="col-md-offset-2 col-md-2">	
									<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Más Información</button>
								</div>
								<div class="col-md-1">	
									<button class="btn btn-danger btnDel" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Eliminar</button>
								</div>
							</div>
							<div class="row" id="deleted<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
" hidden>
								<div class="col-md-10 deleted">
								Acción eliminada <?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
 de la lista de favoritos <button class="btn btn-primary undo" type="button" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Deshacer</button> <span id="timer<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
"></span>
								</div>
							</div>
							<div class="row collapse" id="collapseExample">
								<div class="col-md-3">
									<label> Valor Acumulado: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['vol_acumulado'];?>
</span>
								</div>
								<div class="col-md-4">
									<label> Valor jornada anterior: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['valor_jornadaAnterior'];?>
</span>
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
