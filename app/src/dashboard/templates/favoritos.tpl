<!DOCTYPE html>
<html>
<head>
	<title>SSTF - Grupo 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ISW2-Grupo5">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<!-- Custom styles -->
	<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../dashboard/js/favorites.js"></script>
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
			<h4 id='username' data-userid='{$userid}'>{$username}</h4>
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
				{if isset($favoritesError)}
					<p class="text-danger">Se ha produccido un error en la base de datos, intentelo de nuevo más tarde</p>
				{elseif isset($favoritesEmpty)}
					<h4>Usted no tiene favoritos</h4>
				{else}
					<div class="form-group" id="wrapLista">
					<ul class="list-group" id="lista">
						{foreach from=$acciones item=accion}
						<li class="list-group-item" data-position="{$accion.posicion}" id="accion{$accion.codigo}">
							<div class="row" id="data{$accion.codigo}">
								<div class="col-md-2">
									<label> Nombre:</label><span> {$accion.nombre}</span>
								</div>
								<div class="col-md-2">
									<label> Código: </label><span> {$accion.codigo}</span>
								</div>
								<div class="col-md-2">
									<label> Valor actual: </label><span> {$accion.valor_actual}</span>
								</div>
								<div class="col-md-offset-2 col-md-2">	
									<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#more{$accion.codigo}" aria-expanded="false" aria-controls="more{$accion.codigo}">Más Información</button>
								</div>
								<div class="col-md-1">	
									<button class="btn btn-danger btnDel" data-code="{$accion.codigo}">Eliminar</button>
								</div>
							</div>
							<div class="row" id="deleted{$accion.codigo}" hidden>
								<div class="col-md-10 deleted">
								Acción eliminada {$accion.codigo} de la lista de favoritos <button class="btn btn-primary undo" type="button" data-position="{$accion.posicion}" data-code="{$accion.codigo}">Deshacer</button> <span id="timer{$accion.codigo}"></span>
								</div>
							</div>
							<div class="row collapse" id="more{$accion.codigo}">
								<div class="col-md-3">
									<label> Valor Acumulado: </label><span> {$accion.vol_acumulado}</span>
								</div>
								<div class="col-md-4">
									<label> Valor jornada anterior: </label><span> {$accion.valor_jornadaAnterior}</span>
								</div>
							</div>
						</li>
						{/foreach}
					</ul>
					</div>
				{/if}

			</section>
		</div>
	</div>
</body>
</html>