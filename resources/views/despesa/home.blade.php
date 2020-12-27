<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<title>Despesas | GerFinc</title>
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
				<a class="btn btn-primary" title="Nova despesa" href="{{ route('despesas.create') }}">
					<i class="material-icons align-top">add</i>
				</a>
				<h2 class="w-100 mt-1">Despesas</h2>
			</div>

			<div class="row">
				<div class="col-12">
					@if (count($despesas))
						<table class="table table-striped table-hover">
							<thead class="thead-dark">
								<tr>
									<th>Descrição</th>
									<th>Categoria</th>
									<th colspan="2">Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach($despesas as $despesa)
									<tr>
										<td>{{ $despesa->descricao }}</td>
										<td>{{ $despesa->categoria }}</td>
										<td>
											<a href="{{ route('despesas.show', ['despesa'=>$despesa->id]) }}" title="Ver">
												<i class="material-icons align-top">visibility</i>
												Ver
											</a>
										</td>
										<td>
											<a href="{{ route('despesas.edit', ['despesa'=>$despesa->id]) }}" title="Editar">
												<i class="material-icons align-top">create</i>
												Editar
											</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					@else
						<p class="text-center">Nenhuma despesa cadastrada</p>
					@endif	
				</div>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>