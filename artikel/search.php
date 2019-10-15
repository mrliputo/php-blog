<?php
session_start();
include 'include/connect.php';
$post_sb = $mysqli->query("SELECT * FROM post ORDER BY date DESC LIMIT 3"); 
$comment_sb = $mysqli->query("SELECT * FROM post INNER JOIN comment ON post.id=comment.post_id ORDER BY comment.date DESC LIMIT 3");
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cari artikel</title>
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<script type="text/javascript" src="../assets/bs.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/bs.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>

<body id="body">

	<!-- MULAI NAVBAR -->

	<nav style="position: fixed" class="navbar navbar-default shadow" id="blog-navbar">
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
					<li><a href="index.php"><span class="besar-sedikit">Artikel</span></a></li>
					<li><a href="../galeri">Media</a></li>
					<li><a href="../kontak">Kontak</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right login" id="login-biasa-white">

					<?php
					if(!isset($_SESSION['username'])) {
						echo "<p>Halaman admin,<br><a href='halaman_admin/login.php'>silahkan login</a></p>";
					}else{
						echo "<p>Telah masuk sebagai <u><a href='halaman_admin/admin.php'>".$_SESSION['username']."</a></u>
						<br><a href='halaman_admin/proses_logout.php'>Logout</a></p>";
					}
					?>

				</ul>
			</div>
		</div>
	</nav>

	<!-- SELESAI NAVBAR -->

	<div class="container" style="padding-top: 70px">
		<div class="row">
			<div class="container col-md-7">
				<div class="row">
					<div class="container col-md-11 col-xs-10 col-md-offset-1 col-xs-offset-1">
						<div class="row">
							<form action="search.php" id="searchbox" method="post" class="side-box">
								<h4 class="side-title">Pencarian</h4>
								<div class="foo" style="text-align: center">
									<input class="input search-input" name="s" placeholder="Apa yang kamu cari?" type="text">
									<button type="submit" id="search-btn" class="button" type="submit" name="search">Go</button>
								</div>
							</form>

							<div class="ar-box">
								<div id="article-wrapper">

									<!-- SEARCH PROCESS -->
									<?php include 'process_search.php';?>
									<!-- END PROCESS -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container col-md-3 col-xs-10 col-md-offset-1 col-xs-offset-1">
				<div class="row">
					<div id="cat" class="side-box">
						<h4 class="side-title">Kategori</h4>
						<a href="index.php?programming"><button class="button center-block">Pemrograman</button></a>
						<a href="index.php?application"><button class="button center-block">Aplikasi</button></a>
						<a href="index.php?networking"><button class="button center-block">Jaringan Komputer</button></a>
						<a href="index.php?mobile"><button class="button center-block">Teknologi Mobile</button></a>
						<a href="index.php?os"><button class="button center-block">Sistem Operasi</button></a>
						<a href="index.php?database"><button class="button center-block">Basis Data</button></a>
					</div>

					<div id="side-rec-post" class="side-box">
						<h4 class="side-title">Postingan terbaru</h4>

						<?php
						if($post_sb->num_rows > 0) {
							while($row=$post_sb->fetch_assoc()) {
								echo "

								<img class='sb-rec-img' src='post/".$row['path']."/pic.jpg'>
								<a href='post/".$row['path']."' class='sb-rec-title'>".substr($row['title'],0, 60)."</a>
								<div class='clear'></div>
								<p class='sb-rec-text'>".substr($row['description'],0, 120)."...</p>
								";
							}
						}
						?>

					</div>

					<div id="side-rec-comment" class="side-box">
						<h4 class="side-title">Komentar terbaru</h4>

						<?php
						if($comment_sb->num_rows > 0) {
							while($row = $comment_sb->fetch_assoc()) {
								echo "
								<p class='sb-rec-comment-info'>".$row['name']." <span class='sb-rec-comment-on'>memberikan komentar pada </span><a href='post/".$row['path']."'>".$row['title']."</a> : </p>
								<p class='sb-rec-comment-content'>\"".$row['content']."\"";
								}
							}
							?>

						</div>
					</div>
				</div>
			</div></div>

			<div id="blog-footer">
				<?php include '../assets/footer.php' ?>
			</div>

			<script type="text/javascript" src="include/script.js"></script>

		</body>
		</html>

<!-- END -->