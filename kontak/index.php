<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontak</title>
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<script type="text/javascript" src="../assets/bs.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/bs.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<body id="body">

		<nav style="position: fixed" class="navbar navbar-default shadow" id="con-navbar">
			<div class="container-fluid wrapper">
				<div class="navbar-header" id="blog-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="http://normansyarif.xyz">Norman Syarif</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav" id="navnav">
						<li><a href="../">Beranda</a></li>
						<li><a href="../artikel">Artikel</a></li>
						<li><a href="../galeri">Media</a></li>
						<li><a href="index.php"><span class="besar-sedikit">Kontak</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right login" id="login-biasa-white">
						
						<?php
						if(!isset($_SESSION['username'])) {
							echo "<p>Halaman admin,<br><a href='../artikel/halaman_admin/login.php'>silahkan login</a></p>";
						}else{
							echo "<p>Telah masuk sebagai <u><a href='../artikel/halaman_admin/admin.php'>".$_SESSION['username']."</a></u>
							<br><a href='../artikel/halaman_admin/proses_logout.php'>Logout</a></p>";
						}
						?>

					</ul>
				</div>
			</div>
		</nav>
		<div class="container" style="padding-top: 70px">
			<div class="row">
				<div class="container col-md-8 col-xs-10 col-xs-offset-1 col-md-offset-2 ar-box" id="kotak-kontak">
					<div class="row">
						<h2>Kontak Personal</h2>
						<div class="col-md-4">
							<img src="img/phone.png" class="center-block">
							<p>+62 822 8198 5601</p>
						</div>
						<a href="mailto:hello@normansyarif.xyz">
							<div class="col-md-4">
								<img src="img/em.png" class="center-block">
								<p>hello@normansyarif.xyz</p>
							</div>
						</a>
						<div class="col-md-4">
							<img src="img/bb.png" class="center-block">
							<p>5A2B52B7</p>
						</div>
						<div class="clear"></div>
						<br>
						<h2>Media Sosial</h2>
						<a href="http://facebook.com/normansyarif27" target="_blank">
							<div class="col-md-4">
								<img src="img/fb.png" class="center-block">
								<p>/normansyarif27</p>
							</div>
						</a>
						<a href="http://twitter.com/nnorman27" target="_blank">
							<div class="col-md-4">
								<img src="img/twitter.png" class="center-block">
								<p>@nnorman27</p>
							</div>
						</a>
						<a href="https://plus.google.com/u/0/112688850486563047774" target="_blank">
							<div class="col-md-4">
								<img src="img/gp.png" class="center-block">
								<p>Norman Syarif</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="clear"></div>
		<!-- MULAI FOOTER -->
		<div id="con-footer">
			<!-- Footer atas -->
			<?php include '../assets/footer.php' ?>

		</div>
		<!-- SELESAI FOOTER -->



		<script type="text/javascript" src="../assets/jquery.js"></script>
		<script type="text/javascript" src="include/script.js"></script>

	</body>
	</html>

	<!-- Yess, akhirnya selesai juga -__-  -->

