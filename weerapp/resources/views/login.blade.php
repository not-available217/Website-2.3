<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

		<title>WeerApp Login</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/signin.css" rel="stylesheet">
	</head>

	<body class="text-center">
		<form class="form-signin" method="post" action="/post/login">
			@csrf
			<img class="mb-4" src="LogoIWA.jpg" alt="">
			<h1 class="h3 mb-3 font-weight-normal">Login</h1>

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
					
			<label for="inputEmail" class="sr-only">E-mailadres</label>
			<input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mailadres" required autofocus>
			<label for="inputPassword" class="sr-only">Wachtwoord</label>
			<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Wachtwoord" required>
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Onthoud mij
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			<p class="mt-5 mb-3 text-muted">&copy; WeerApp 2022</p>
		</form>
	</body>
</html>
