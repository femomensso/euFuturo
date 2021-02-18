<!DOCTYPE html>
<html>
<head>
	<title>euFuturo.com</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: #002633">
	<div class="container" style="font-family: monospace;">
		<div class="my-5 mx-4 p-4 bg-light">
			<div class="row">
				<div class="col">
					<div class="d-flex justify-content-center">
						<span class="mx-2 my-3"><a href={{ route('index') }} class='btn btn-secondary'>Voltar</a></span>
					</div>
					<img src="imagens/cadeado.png" class="mx-auto d-block" style="width: 20em">
					<div class="d-flex justify-content-center">
						<form method="post" action="{{ route('revelar') }}">
							@csrf
							<div class="mx-2 my-2"><input type="email" name="email" placeholder="Email"></div>
							{{ $errors->first('email') }}<br>
							<div class="mx-2 my-2"><input type="text" name="codigo" placeholder="Código"></div>
							{{ $errors->first('codigo') }}<br>
							<span class="mx-2 my-2"><button type="submit" class='btn btn-secondary'>Revelar</button></span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
