<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

	<title>HIMFEST LOGIN</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/login.css">
</head>

<body class="text-center">
	<div class="back-button">
		<a href="<?= site_url()?>"><i class="fas fa-chevron-circle-left fa-3x"></i></a>
	</div>
	<div id="logreg-forms" class="d-flex flex-column justify-content-center align-items-center">
		<h1 class="h3 mb-3 font-weight-normal" style="text-align: center">LOGIN</h1>
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
							role="tab" aria-controls="nav-home" aria-selected="true">Individu</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
							role="tab" aria-controls="nav-profile" aria-selected="false">Team</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<form class="form-signin">
							<img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72"
								height="72">
							<label for="inputUsername" class="sr-only">Username</label>
							<input type="text" id="inputUsername" name="username" class="form-control"
								placeholder="Username" required autofocus>
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" name="password" id="inputPassword" class="form-control"
								placeholder="Password" required>
							<div class="text-right w-100">
								<a href="#">Forgot Password?</a>
							</div>
							<div class="checkbox my-3">
								<label>
									<input type="checkbox" value="remember-me"> Remember me
								</label>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
						</form>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<form class="form-signin">
							<img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72"
								height="72">
							<label for="inputTeamName" class="sr-only">Team Name</label>
							<input type="text" id="inputTeamName" name="teamName" class="form-control"
								placeholder="Team Name" required autofocus>
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" name="password" id="inputPassword" class="form-control"
								placeholder="Password" required>
							<div class="text-right w-100">
								<a href="#">Forgot Password?</a>
							</div>
							<div class="checkbox my-3">
								<label>
									<input type="checkbox" value="remember-me"> Remember me
								</label>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<a href="<?= site_url('signup')?>">Haven't signed up yet? Sign up here!</a>
		</div>
	</div>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<!-- popper js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<!-- bootstrap scripts -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- fontawesome  -->
	<script src="https://kit.fontawesome.com/435e55727b.js" crossorigin="anonymous"></script>
</body>

</html>
