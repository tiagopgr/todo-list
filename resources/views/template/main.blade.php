<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<title>To-do List {{ isset($title) ? ' - ' . $title : '' }} </title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->

		{!! Html::style('assets/css/app.min.css') !!}
	</head>
	<body>

		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!! route('task.index') !!}">To-do List</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">

					<li><a href="{!! route('task.create') !!}">Criar tarefa</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		<div class="container-fluid">
			@yield('container')
		</div>

		<!-- jQuery -->
		{!! Html::script('assets/js/jquery.min.js') !!}
		<!-- Bootstrap JavaScript -->
		{!! Html::script('assets/js/bootstrap.js') !!}
	</body>
</html>