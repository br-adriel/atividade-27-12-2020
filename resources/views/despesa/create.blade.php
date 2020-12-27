<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<title>Nova despesa | GerFinc</title>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- material icons -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<!--Bootstrap 4.5-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand" href="{{ url('/') }}">GerFinc</a>
		</nav>
		<section class="container py-3">
			<div class="row p-2">
				<a class="btn btn-primary" title="Voltar" href="{{ route('despesas.index') }}">
					<i class="material-icons align-top">home</i>
				</a>
			</div>

			<div class="row">
				<div class="col-12 col-md-7 col-lg-5 mx-auto">
					<div class="card shadow-sm">
						<div class="card-body">
							<h2 class="text-center">Nova despesa</h2>
							<form method="post" action="{{ route('despesas.store') }}">
								@csrf
								<div class="form-group">
									<label>Descrição</label>
									<input class="form-control" type="text" name="descricao">
								</div>
								<div class="form-group">
									<label>Categoria</label>
									<input class="form-control" type="text" name="categoria">
								</div>
								<button class="btn btn-primary w-100" type="submit">Adicionar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>