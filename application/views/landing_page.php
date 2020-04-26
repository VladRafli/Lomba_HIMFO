<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HIMFEST</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
			<a class="navbar-brand" href="#home">
				<div class="d-flex justify-content-center align-items-center">
					<img src="images/chrome.png" alt="logo" class="w-100">
					HIMFEST
				</div>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
				aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="menu-bar navbar-nav d-flex justify-content-center align-items-center">
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#timeline">Timeline</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#guideline">Guideline</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#prize">Prize</a>
					</li>
				</ul>
				<ul class="signup-bar navbar-nav d-flex justify-content-center align-items-center">
					<li class="nav-item">
						<a class="nav-link" href="#">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<button type="button" name="btn-signup" class="btn btn-primary">
								<div class="d-flex justify-content-center align-items-center">
									<span class="mr-3">Sign Up</span>
									<i class="fas fa-arrow-right"></i>
								</div>
							</button>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<section id="home">
			<div class="home-container">
				<div class="row">
					<div class="col-lg-9">
						<img src="images/home.png" alt="home section" class="w-100">
					</div>
					<div class="col-lg-3 d-flex flex-column justify-content-center p-0">
						<h1>Make programming skill your new exp</h1>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#">
							<button type="button" name="btn-signup" class="btn btn-primary">
								<div class="d-flex justify-content-center align-items-center">
									<span class="mr-3">Sign Up</span>
									<i class="fas fa-arrow-right"></i>
								</div>
							</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="about-container">
				<div class="d-flex flex-column justify-content-center align-items-center text-center">
					<h5>The Reason We Held</h5>
					<h1>HIMFEST COMPETITION</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, qui. Optio dignissimos nam
						aspernatur totam! Aliquid voluptatibus ab voluptates voluptatum quaerat enim ipsam deserunt
						deleniti, harum aperiam laboriosam libero adipisci possimus quibusdam doloribus non atque
						provident totam qui labore cumque! Praesentium distinctio quae, nulla perferendis dicta facere
						iure nemo quod reiciendis dolorem, sequi, ut fugiat! Esse incidunt suscipit molestiae deserunt?
					</p>
				</div>
			</div>
		</section>

		<section id="timeline">
			<div class="timeline-container text-center">
				<h1>Timeline</h1>
			</div>
		</section>

		<section id="guideline">
			<div class="guideline-container text-center">
				<h1>Guidelines</h1>
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-ui/ux-tab" data-toggle="tab" href="#nav-ui/ux"
							role="tab" aria-controls="nav-ui/ux" aria-selected="true">UI/UX</a>
						<a class="nav-item nav-link" id="nav-website-tab" data-toggle="tab" href="#nav-website"
							role="tab" aria-controls="nav-website" aria-selected="false">Website</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0 text-left" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-ui/ux" role="tabpanel"
						aria-labelledby="nav-ui/ux-tab">
						<ol type="number">
							<li>Peserta bisa perorangan atau tim beranggotakan maksimal 3 orang yang terdiri (tapi tidak
								terbatas dari) UI Designer, UX
								Designer, UX Researcher, UX Writer, Graphic Designer, Copywriter, Project Manager,
								Product Owner, Front-end Developer,
								atau Back-end Developer, dll.
							</li>
							<li>Semua peserta harus menyetujui dan mengikuti Syarat dan Ketentuan (umum dan khusus)
							</li>
							<li>
								Daftarkan diri atau tim kamu melalui link pendaftaran. Tim Jenius akan mengirimkan link
								untuk pengiriman karya kamu ke
								email yang telah didaftarkan.
							</li>
							<li>
								10 tim terpilih akan mendapatkan kesempatan untuk bersaing ke babak final dan melempar
								ide desain UI/UX mereka di
								Co.Creation Week 2020
							</li>
						</ol>
					</div>
					<div class="tab-pane fade" id="nav-website" role="tabpanel" aria-labelledby="nav-website-tab">
						<ol type="number">
							<li>Peserta bisa perorangan atau tim beranggotakan maksimal 3 orang yang terdiri (tapi tidak
								terbatas dari) UI Designer, UX
								Designer, UX Researcher, UX Writer, Graphic Designer, Copywriter, Project Manager,
								Product Owner, Front-end Developer,
								atau Back-end Developer, dll.
							</li>
							<li>Semua peserta harus menyetujui dan mengikuti Syarat dan Ketentuan (umum dan khusus)
							</li>
							<li>
								Daftarkan diri atau tim kamu melalui link pendaftaran. Tim Jenius akan mengirimkan link
								untuk pengiriman karya kamu ke
								email yang telah didaftarkan.
							</li>
							<li>
								10 tim terpilih akan mendapatkan kesempatan untuk bersaing ke babak final dan melempar
								ide desain UI/UX mereka di
								Co.Creation Week 2020
							</li>
						</ol>
					</div>
				</div>
				<a href="#">
					<button type="button" name="btn-signup" class="btn btn-secondary">
						<div class="d-flex justify-content-center align-items-center">
							<span class="mr-3">Download Guidebook</span>
							<i class="fas fa-download"></i>
						</div>
					</button>
				</a>
			</div>
		</section>

		<section id="prize">
			<div class="prize-container text-center">
				<h1>Prize</h1>
				<div class="d-flex align-items-center justify-content-center">
					<div class="prize-card mr-3">
						<h4>#2</h4>
						<h1>Rp 20 juta</h1>
					</div>
					<div class="prize-card mb-5">
						<h4>#1</h4>
						<h1>Rp 35 juta</h1>
					</div>
					<div class="prize-card ml-3">
						<h4>#3</h4>
						<h1>Rp 10 juta</h1>
					</div>
				</div>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nesciunt quas quibusdam hic harum
					doloribus id, dolorum iusto possimus impedit.</p>
			</div>
		</section>
	</main>

	<footer>
		<hr />
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="d-flex">
						<div class="col-sm-4">
							<h6>Contact</h6>
							<ul>
								<li>HIMFEST Instagram</li>
								<li>Call HIMFEST</li>
								<li>+628-1405-2222</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h6>About</h6>
							<ul>
								<li>HIMFEST</li>
								<li>UI/UX</li>
								<li>Website</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h6>Community</h6>
							<ul>
								<li>More Information</li>
								<li>HIMFEST Support</li>
								<li>+628-1405-2222</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex justify-content-center align-items-center">
						<img src="images/chrome.png" alt="logo" class="w-50">
						<h1>HIMFEST</h1>
					</div>
				</div>
			</div>
			<p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis autem culpa eius
				tempore, corporis officiis accusamus commodi recusandae minima esse sapiente nulla veniam similique sed
				facilis eligendi itaque explicabo dolorum quidem ipsam ullam, veritatis debitis? Eaque accusamus
				cupiditate placeat nam est dolor magni consequuntur recusandae id aut, officiis sed praesentium rem.
				Explicabo eveniet veniam adipisci sunt sint blanditiis a harum.</p>
		</div>
	</footer>

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