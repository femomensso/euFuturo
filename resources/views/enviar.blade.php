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
					<p>Nossa única missão é enviar sua mensagem para o futuro em segurança. Essa mensagem será enviada em uma
					 cápsula do tempo protegida por um código e só poderá ser aberta na data final.</p>
					{{$msg ?? ''}}
					<form method="post" action="{{ route('enviar') }}">
						@csrf
						<textarea class="form-control" name="mensagem" style="height: 18em;"></textarea>
						{{ $errors->first('mensagem') }}<br>
						<p> Para qual email você deseja enviar o código de abertura da cápsula do tempo?</p>
						<input class="form-control" type="email" name="email" style="width: 20em">
						{{ $errors->first('email') }}<br>
						<p> Daqui quantos anos você deseja receber sua mensagem?</p>
						<input class="form-control" type="number" step="10" min="10" max="50" name="tempo" style="width: 10em">
						{{ $errors->first('tempo') }}<br>
						<button class="btn btn-dark mx-auto" type="submit" style="width: 10em">Lacrar e enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
