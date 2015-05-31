<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-31 12:41:27
         compiled from "dashboard/templates/favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1540552564556a3ff69dc8a1-31346573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '945b5b95b732626b7709a8af0e2c062d1ba3a8df' => 
    array (
      0 => 'dashboard/templates/favoritos.tpl',
      1 => 1433068884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1540552564556a3ff69dc8a1-31346573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556a3ff6bcc4a1_01391679',
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'view' => 0,
    'favoritesError' => 0,
    'favoritesEmpty' => 0,
    'acciones' => 0,
    'accion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556a3ff6bcc4a1_01391679')) {function content_556a3ff6bcc4a1_01391679($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>SSTF - Grupo 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ISW2-Grupo5">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/jquery-ui.min.css">
	<link rel="stylesheet" href="../../dashboard/css/favorites.css">
	<!-- Custom styles -->
	<?php echo '<script'; ?>
 type="text/javascript" src="../../js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../js/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../dashboard/js/favorites.js"><?php echo '</script'; ?>
>
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
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse">
				      <ul class="nav navbar-nav">
				        <li class="<?php if ($_smarty_tpl->tpl_vars['view']->value=='list') {?>active<?php }?>"><a href="?view=list" class="glyphicon glyphicon-th-list"></a></li>
				        <li class="<?php if ($_smarty_tpl->tpl_vars['view']->value=='grid') {?>active<?php }?>"><a href="?view=grid" class="glyphicon glyphicon-th"></a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				<?php if (isset($_smarty_tpl->tpl_vars['favoritesError']->value)) {?>
					<p class="text-danger">Se ha produccido un error en la base de datos, intentelo de nuevo más tarde</p>
				<?php } elseif (isset($_smarty_tpl->tpl_vars['favoritesEmpty']->value)) {?>
					<h4>Usted no tiene favoritos</h4>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['view']->value=='list') {?>
					<div class="form-group" id="wrapLista">
					<ul class="list-group" id="lista">
						<?php  $_smarty_tpl->tpl_vars['accion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accion']->key => $_smarty_tpl->tpl_vars['accion']->value) {
$_smarty_tpl->tpl_vars['accion']->_loop = true;
?>
						<li class="list-group-item" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
" data-position="<?php echo $_smarty_tpl->tpl_vars['accion']->value['posicion'];?>
" id="accion<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
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
									<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#more<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
" aria-expanded="false" aria-controls="more<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Más Información</button>
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
 de la lista de favoritos <button class="btn btn-primary undo" type="button" data-position="<?php echo $_smarty_tpl->tpl_vars['accion']->value['posicion'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Deshacer</button> <span id="timer<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
"></span>
								</div>
							</div>
							<div class="row collapse" id="more<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">
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
					<?php if ($_smarty_tpl->tpl_vars['view']->value=='grid') {?>
					<ul id="lista" class="listaGrid">
						<?php  $_smarty_tpl->tpl_vars['accion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accion']->key => $_smarty_tpl->tpl_vars['accion']->value) {
$_smarty_tpl->tpl_vars['accion']->_loop = true;
?>
					  		<li class="ui-state-default" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
" data-position="<?php echo $_smarty_tpl->tpl_vars['accion']->value['posicion'];?>
" id="accion<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">
					  			<div class="row data" id="data<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">
						  			<button class="btn btn-primary col-md-6 col-md-offset-1" type="button" data-toggle="collapse" data-target="#more<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
" aria-expanded="false" aria-controls="more<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Más Información</button>
									<button class="btn btn-danger btnDel col-md-3 col-md-offset-1" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Eliminar</button>
						  			<ul class="col-md-9 col-md-offset-2">
										<li>
											<label> Nombre:</label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['nombre'];?>
</span>
										</li>
										<li>
											<label> Código: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
</span>
										</li>
										<li>
											<label> Valor actual: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['valor_actual'];?>
</span>
										</li>
										<div class="collapse" id="more<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">
											<li>
												<label> Valor Acumulado: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['vol_acumulado'];?>
</span>
											</li>
											<li>
												<label> Valor jornada anterior: </label><span> <?php echo $_smarty_tpl->tpl_vars['accion']->value['valor_jornadaAnterior'];?>
</span>
											</li>
										</div>
						  			</ul>
								</div>
								<div class="row" id="deleted<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
" hidden>
									<div class="col-md-10 col-md-offset-1 deleted">
										Acción eliminada <?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
 de la lista de favoritos 
									</div>
									<button class="btn btn-primary undo col-md-4 col-md-offset-4" type="button" data-position="<?php echo $_smarty_tpl->tpl_vars['accion']->value['posicion'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
">Deshacer</button>
									<span class="col-md-12 timerGrid" id="timer<?php echo $_smarty_tpl->tpl_vars['accion']->value['codigo'];?>
"></span>
								</div>
					  		</li>
						<?php } ?>
					</ul>
					<?php }?>
				<?php }?>

			</section>
		</div>
	</div>
</body>
</html><?php }} ?>
