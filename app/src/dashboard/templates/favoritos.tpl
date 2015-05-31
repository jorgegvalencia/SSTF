<!DOCTYPE html>
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
	<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../dashboard/js/favorites.js"></script>
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
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse">
				      <ul class="nav navbar-nav">
				        <li class="{if $view eq list}active{/if}"><a href="?view=list" class="glyphicon glyphicon-th-list"></a></li>
				        <li class="{if $view eq grid}active{/if}"><a href="?view=grid" class="glyphicon glyphicon-th"></a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				{if isset($favoritesError)}
					<p class="text-danger">Se ha produccido un error en la base de datos, intentelo de nuevo más tarde</p>
				{elseif isset($favoritesEmpty)}
					<h4>Usted no tiene favoritos</h4>
				{else}
					{if $view eq list}
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
					{if $view eq grid}
					<ul id="lista" class="listaGrid">
						{foreach from=$acciones item=accion}
					  		<li class="ui-state-default" data-position="{$accion.posicion}" id="accion{$accion.codigo}">
					  			<div class="row data" id="data{$accion.codigo}">
						  			<button class="btn btn-primary col-md-6 col-md-offset-1" type="button" data-toggle="collapse" data-target="#more{$accion.codigo}" aria-expanded="false" aria-controls="more{$accion.codigo}">Más Información</button>
									<button class="btn btn-danger btnDel col-md-3 col-md-offset-1" data-code="{$accion.codigo}">Eliminar</button>
						  			<ul class="col-md-9 col-md-offset-2">
										<li>
											<label> Nombre:</label><span> {$accion.nombre}</span>
										</li>
										<li>
											<label> Código: </label><span> {$accion.codigo}</span>
										</li>
										<li>
											<label> Valor actual: </label><span> {$accion.valor_actual}</span>
										</li>
										<div class="collapse" id="more{$accion.codigo}">
											<li>
												<label> Valor Acumulado: </label><span> {$accion.vol_acumulado}</span>
											</li>
											<li>
												<label> Valor jornada anterior: </label><span> {$accion.valor_jornadaAnterior}</span>
											</li>
										</div>
						  			</ul>
								</div>
								<div class="row" id="deleted{$accion.codigo}" hidden>
									<div class="col-md-10 col-md-offset-1 deleted">
										Acción eliminada {$accion.codigo} de la lista de favoritos 
									</div>
									<button class="btn btn-primary undo col-md-4 col-md-offset-4" type="button" data-position="{$accion.posicion}" data-code="{$accion.codigo}">Deshacer</button>
									<span class="col-md-12 timerGrid" id="timer{$accion.codigo}"></span>
								</div>
					  		</li>
						{/foreach}
					</ul>
					{/if}
				{/if}

			</section>
		</div>
	</div>
</body>
</html>