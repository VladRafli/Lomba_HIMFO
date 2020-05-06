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

	<title>HIMFEST DASHBOARD</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/dashboard.css">
</head>

<body>
	<div class="d-flex justify-content-center align-items-center w-100 h-100">
		<div class="dashboard-container">

			<div class="sidebar nav nav-tabs nav-fill" id="nav-tab" role="tablist">
				<div class="head-profile text-center navbar-brand">
					<img src="<?= base_url()?>images/profile.png" alt="profile picture"
						class="profile-pict rounded-circle">
					<p><strong>Username / Team Name</strong></p>
				</div>
				<p class="text-secondary main-menu">Main Menu</p>
				<a href="#nav-dashboard" id="nav-dashboard-tab"
					class="d-flex align-items-center nav-item nav-link active " data-toggle="tab"
					aria-controls="nav-dashboard" aria-selected="true" role="tab">
					<i class="fas fa-th fa-lg fa-fw mr-3 text-secondary"></i>
					Dashboard
				</a>
				<a href="#nav-teammates" id="nav-teammates-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-teammates" aria-selected="false" role="tab">
					<i class="fas fa-user-friends fa-lg fa-fw mr-3 text-secondary"></i>
					Teammates
				</a>
				<a href="#nav-result" id="nav-result-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-result" aria-selected="false" role="tab">
					<i class="fas fa-chart-pie fa-lg fa-fw mr-3 text-secondary"></i>
					Result Lomba
				</a>
				<a href="#nav-upload" id="nav-upload-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-upload" aria-selected="false" role="tab">
					<i class="fas fa-upload fa-lg fa-fw mr-3 text-secondary"></i>
					Upload Files
				</a>
				<p class="text-secondary akun-saya">Akun Saya</p>
				<a href="#nav-edit" id="nav-edit-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-edit" aria-selected="false" role="tab">
					<i class="fas fa-user-circle fa-lg fa-fw mr-3 text-secondary"></i>
					Edit Profile
				</a>
				<a href="#nav-security" id="nav-security-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-security" aria-selected="false" role="tab">
					<i class="fas fa-lock fa-lg fa-fw mr-3 text-secondary"></i>
					Security Password
				</a>
				<div class="sign-out">
					<a href="#" class="d-flex align-items-center">
						<i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-primary"></i>
						Sign Out
					</a>
				</div>
			</div>

			<div class="content tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel"
					aria-labelledby="nav-dashboard-tab">
					<h1>DASHBOARD</h1>
					<div class="greeting-container">
						<div class="greeting">
							<h3>Hola Team 7!</h3>
							<p>Dapatkan kesempatan bekerja di bidang IT dengan mengikuti lomba ini dan dapatkan
								informasi lebih lanjut</p>
						</div>
						<img src="<?= base_url()?>images/computer@2x.png" class="dashboard-image">
					</div>
					<div class="row">
						<div class="col-8">
							<div class="detail-team">
								<h5>Detail Team</h5>
								<p class="text-secondary">Team details</p>
								<div class="teammate-container d-flex flex-column">
									<div class="teammate-card d-flex">
										<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt="" class="teammate-pict">
										<h6 class="teammate-name">Anggota 1</h6>
										<div class="lomba d-flex justify-content-center align-items-center">
											<h6>UI/UX</h6>
										</div>
									</div>
									<div class="teammate-card d-flex">
										<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt="" class="teammate-pict">
										<h6 class="teammate-name">Anggota 2</h6>
										<div class="lomba d-flex justify-content-center align-items-center">
											<h6>UI/UX</h6>
										</div>
									</div>
									<div class="teammate-card d-flex">
										<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt="" class="teammate-pict">
										<h6 class="teammate-name">Anggota 3</h6>
										<div class="lomba d-flex justify-content-center align-items-center">
											<h6>UI/UX</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">

						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="nav-teammates" role="tabpanel" aria-labelledby="nav-teammates-tab">
					<div class="teammates">
						<h1>Teammates</h1>
						<p class="text-secondary">Team details</p>
						<div class="teammate-container d-flex flex-column">
							<div class="teammate-card d-flex">
								<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt="" class="teammate-pict">
								<div class="teammate-profile">
									<h6 class="teammate-name">Anggota 1</h6>
									<ul class="text-secondary">
										<li>Tempat tanggal lahir: </li>
										<li>Asal sekolah: </li>
										<li>Alamat: </li>
									</ul>
								</div>
								<a href="#">Edit Profile</a>
							</div>
							<div class="teammate-card d-flex">
								<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt="" class="teammate-pict">
								<div class="teammate-profile">
									<h6 class="teammate-name">Anggota 2</h6>
									<ul class="text-secondary">
										<li>Tempat tanggal lahir: </li>
										<li>Asal sekolah: </li>
										<li>Alamat: </li>
									</ul>
								</div>
								<a href="#">Edit Profile</a>
							</div>
							<div class="teammate-card d-flex">
								<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt="" class="teammate-pict">
								<div class="teammate-profile">
									<h6 class="teammate-name">Anggota 3</h6>
									<ul class="text-secondary">
										<li>Tempat tanggal lahir: </li>
										<li>Asal sekolah: </li>
										<li>Alamat: </li>
									</ul>
								</div>
								<a href="#">Edit Profile</a>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="nav-result" role="tabpanel" aria-labelledby="nav-result-tab">
					<h1>Result Lomba</h1>
					<p class="text-secondary mt-4 mb-1">Pilih lombanya</p>
					<div class="d-flex justify-content-start align-items-center p-0 w-100">
						<ul class="nav nav-pills">
							<li class="active"><a href="#" class="btn btn-primary">UI/UX</a></li>
							<li><a href="#" class="btn btn-primary disabled">Website</a></li>
						</ul>
					</div>
					<div class="result-container d-flex justify-content-center align-items-center">
						<p>Result untuk lomba ini belum tersedia</p>
					</div>
				</div>

				<div class="tab-pane fade" id="nav-upload" role="tabpanel" aria-labelledby="nav-upload-tab">
					<h1>Upload Files</h1>
					<p class="text-secondary">Upload file sesuai instruksi</p>
				</div>

				<div class="tab-pane fade" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">
					<p>edit</p>
				</div>

				<div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab">
					<p>security</p>
				</div>
			</div>

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
