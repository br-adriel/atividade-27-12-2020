<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<title>Despesa #{{ $despesa->id }} | GerFinc</title>
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
				<!-- botao voltar -->
				<a class="btn btn-primary ml-2" title="voltar" href="{{ route('despesas.index') }}">
					<i class="material-icons align-top">home</i>
				</a>

				<!-- botao editar -->
				<a href="{{ route('despesas.edit', ['despesa'=>$despesa->id]) }}" title="Editar" class="btn btn-primary ml-2">
					<i class="material-icons align-top">create</i>
				</a>

				<!--botao apagar -->
				<a class="btn btn-danger ml-2" title="Apagar" onclick="document.getElementById('formDelete').submit(); return false;">
					<i class="material-icons align-top">delete</i>
				</a>

				<form id="formDelete" action="{{ route('despesas.destroy', ['despesa'=>$despesa->id]) }}" method="post">
					@csrf
					@method('DELETE')
				</form>

				<h2 class="w-100 mt-1">Despesa #{{ $despesa->id }}</h2>
			</div>

			<div class="row">
				<div class="col-12">
					<table class="table">
						<tbody>
							<tr>
								<th>Descrição:</th>
								<td>{{ $despesa->descricao }}</td>
							</tr>
							<tr>
								<th>Categoria:</th>
								<td>{{ $despesa->categoria }}</td>
							</tr>
							<tr>
								<th>Criada em:</th>
								<td>{{ $despesa->created_at }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>