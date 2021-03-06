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
					@php
					session_start();
					@endphp
					{{ $_SESSION['msg'] ?? '' }}
					@php
					session_destroy();
					@endphp
					<p class="d-flex justify-content-center">Olá! Bem vindo ao euFuturo.com! O que você deseja fazer?</p>
					<div class="d-flex justify-content-center">
						<span class="mx-2"><a href={{ route('enviar') }} class='btn btn-secondary'>Enviar uma mensagem na cápsula do tempo</a></span>
						<span class="mx-2"><a href={{ route('revelar') }} class='btn btn-secondary'>Revelar uma mensagem da cápsula do tempo</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
