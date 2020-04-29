<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<title>HIMFEST</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/styles.css">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light pt-3 pb-3">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="<?= base_url()?>images/chrome.png" alt="logo"
						class="w-25">Himfest</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
					aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto ml-auto mt-2 mt-lg-0">
						<li class="nav-item mr-1 ml-1 active">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item mr-1 ml-1">
							<a class="nav-link" href="#timeline">Timeline</a>
						</li>
						<li class="nav-item mr-1 ml-1">
							<a class="nav-link" href="#guidelines">Guidelines</a>
						</li>
						<li class="nav-item mr-1 ml-1">
							<a class="nav-link" href="#prize">Prize</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<button class="btn my-2 my-sm-0" type="submit">Login</button>
						<button class="btn btn-primary my-2 my-sm-0" type="submit">Sign Up <i
								class="fas fa-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<section id="home">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<img src="<?= base_url()?>/images/home.png" alt="home section" class="w-100">
					</div>
					<div class="col-md-4 pt-5 d-flex flex-column justify-content-center">
						<h1>
							Make programming skill your new exp
						</h1>
						<p>
							Lorem ipsum dolor sit amet
						</p>
						<button class="btn btn-primary mt-4" type="submit">Sign Up <i
								class="fas fa-arrow-right"></i></button>
					</div>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container-fluid">
				<div class="row pt-md-5 mt-md-5">
					<div class="col-md-5 pl-5 text-left">
						<h1 class="flex pl-sm-3">
							About Himfest
						</h1>
						<p class="mt-sm-5 pl-sm-3">
							Merupakan kompetisi pelajar dalam bidang teknologi yang termasuk ke dalam rangkaian Proker
							himpunan informatika.
							ini dikoordinatori oleh HIMFO Bina Nusantara, dimana bertujuan untuk mewadahi,
							memfasilitasi, serta mendukung pelajar Indonesia dalam menciptakan inovasi teknologi
							Informasi dalam dunia pendidikan yang ditujukan untuk memberikan warna baru dalam media
							pembelajaran.
						</p>
						<button class="btn btn-primary mt-sm-4 ml-sm-3" type="submit">Sign Up <i
								class="fas fa-arrow-right"></i></button>
					</div>
					<div class="col-md-7">
						<img src="<?= base_url()?>/images/Group10@2x.png" alt="home section"
							class="w-100 position-relative" style="right:-15px">
					</div>
				</div>
			</div>
		</section>

		<section id="timeline">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Timeline</h1>
						<ul class="timeline timeline-horizontal">
							<li class="timeline-item col">
								<div class="timeline-date">
									Registrasi Dibuka
									<p>( Semua Bidang )</p>
									1 Februari 2020
								</div>
								<div class="timeline-badge primary">
								</div>
								<div class="timeline-name">
									-
								</div>
							</li>
							<li class="timeline-item col">
								<div class="timeline-date">
									Registrasi Di Tutup
									<p>( Semua Bidang )</p>
									1 Januari 2020
								</div>
								<div class="timeline-badge success">
								</div>
								<div class="timeline-name">
									Berlangsung
								</div>
							</li>
							<li class="timeline-item col">
								<div class="timeline-date">
									Acara Puncak
									<p>( Semua Bidang )</p>
									13 Maret 2020
								</div>
								<div class="timeline-badge info">
								</div>
								<div class="timeline-name">
									-
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="guidelines">
			<div class="container">
				<div class="row">
					<div class="guidelines-container text-center col-md-10 offset-md-1" style="width:100%">
						<h1>Guidelines</h1>
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-ui/ux-tab" data-toggle="tab"
									href="#nav-ui/ux" role="tab" aria-controls="nav-ui/ux"
									aria-selected="true">UI/UX</a>
								<a class="nav-item nav-link" id="nav-website-tab" data-toggle="tab" href="#nav-website"
									role="tab" aria-controls="nav-website" aria-selected="false">Website</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0 text-left" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-ui/ux" role="tabpanel"
								aria-labelledby="nav-ui/ux-tab">
								<ol type="number">
									<li>Peserta bisa perorangan atau tim beranggotakan maksimal 3 orang yang terdiri
										(tapi tidak
										terbatas dari) UI Designer, UX
										Designer, UX Researcher, UX Writer, Graphic Designer, Copywriter, Project
										Manager,
										Product Owner, Front-end Developer,
										atau Back-end Developer, dll.
									</li>
									<li>Semua peserta harus menyetujui dan mengikuti Syarat dan Ketentuan (umum dan
										khusus)
									</li>
									<li>
										Daftarkan diri atau tim kamu melalui link pendaftaran. Tim Jenius akan
										mengirimkan link
										untuk pengiriman karya kamu ke
										email yang telah didaftarkan.
									</li>
									<li>
										10 tim terpilih akan mendapatkan kesempatan untuk bersaing ke babak final dan
										melempar
										ide desain UI/UX mereka di
										Co.Creation Week 2020
									</li>
								</ol>
							</div>
							<div class="tab-pane fade" id="nav-website" role="tabpanel"
								aria-labelledby="nav-website-tab">
								<ol type="number">
									<li>Peserta bisa perorangan atau tim beranggotakan maksimal 3 orang yang terdiri
										(tapi tidak
										terbatas dari) UI Designer, UX
										Designer, UX Researcher, UX Writer, Graphic Designer, Copywriter, Project
										Manager,
										Product Owner, Front-end Developer,
										atau Back-end Developer, dll.
									</li>
									<li>Semua peserta harus menyetujui dan mengikuti Syarat dan Ketentuan (umum dan
										khusus)
									</li>
									<li>
										Daftarkan diri atau tim kamu melalui link pendaftaran. Tim Jenius akan
										mengirimkan link
										untuk pengiriman karya kamu ke
										email yang telah didaftarkan.
									</li>
									<li>
										10 tim terpilih akan mendapatkan kesempatan untuk bersaing ke babak final dan
										melempar
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
				</div>
			</div>
		</section>

		<section id="prize" class="d-block">
			<div class="container">
				<div class="row">
					<div class="col-md-10 pt-5 text-center offset-md-1">
						<h1 class="mb-5 mt-3">Prize</h1>
						<div class="row">
							<div class="col-md-4 mt-3 mt-sm-5">
								<div class="prize-card">
									<img src="<?= base_url()?>/images/second.png" class="medal w-25">
									<span class="text">
										Rp 20 juta
									</span>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-sm-0 mb-sm-5">
								<div class="prize-card prize-active">
									<img src="<?= base_url()?>/images/first.png" class="medal w-25">
									<span class="text">
										Rp 35 juta
									</span>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-sm-5">
								<div class="prize-card">
									<img src="<?= base_url()?>/images/third.png" class="medal w-25">
									<span class="text">
										Rp 10 juta
									</span>
								</div>
							</div>
						</div>

						<p class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nesciunt quas
							quibusdam hic harum
							doloribus id, dolorum iusto possimus impedit.</p>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-4 d-flex justify-content-center align-items-center">
							<img src="<?= base_url()?>images/chrome.png" alt="logo"class="w-25"><h6 class="m-0">Himfest</h6>
						</div>
						<div class="col-4 d-flex flex-column justify-content-center">
							<h5>PHONE</h5>
							<p class="mt-2">+6288100928</p>
						</div>
						<div class="col-4 d-flex flex-column justify-content-center">
							<h5>EMAIL</h5>
							<p class="mt-2">himfo.uhuy@rocketmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="social">
						<a href="#" class="d-inline-block mx-3"><i class="fab fa-instagram fa-2x"></i></a> 
						<a href="#" class="d-inline-block mx-3"><i class="fab fa-github fa-2x"></i></a> 
					</div>
				</div>
			</div>	
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