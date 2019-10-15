<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<script type="text/javascript" src="../assets/bs.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/bs.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<body id="body">

	<nav style="position: fixed" class="navbar navbar-default shadow" id="gal-navbar">
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
          <li><a href="index.php"><span class="besar-sedikit">Media</span></a></li>
          <li><a href="../kontak">Kontak</a></li>
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

		<div class="container col-md-9 col-md-offset-1 waw" style="padding-top: 100px;">
			<div class="row">
			<div class="col-md-offset-1">
				<div class="col-md-4">
					<a class="fancybox" rel="group" title="Buat tugas agroindustri" href="photos/1.jpg"><img src="photos/1.jpg"></a>
					<a class="fancybox" rel="group" href="photos/2.jpg" title="????"><img src="photos/2.jpg"></a>
					<a class="fancybox" rel="group" href="photos/3.jpg" title="Kuliah di vicon"><img src="photos/3.jpg"></a>
				</div>
				<div class="col-md-4">
					<a class="fancybox" rel="group" href="photos/5.jpg" title="Rapat"><img src="photos/5.jpg"></a>
					<a class="fancybox" rel="group" title="Rapat lagi" href="photos/6.jpg"><img src="photos/6.jpg"></a>
				</div>
				<div class="col-md-4">
					<a class="fancybox" rel="group" href="photos/7.jpg" title="Ujian"><img src="photos/7.jpg"></a>
					<a class="fancybox" rel="group" href="photos/10.jpg" title="Kuliah lagi"><img src="photos/10.jpg"></a>
					<a class="fancybox" rel="group" href="photos/9.jpg" title="Ujian lagi"><img src="photos/9.jpg"></a>
				</div>
			</a>
		</div>
		</div>
	</div>

	<div class="clear"></div>
	<!-- MULAI FOOTER -->
	<div id="gal-footer">
		<!-- Footer atas -->
		<?php include '../assets/footer.php' ?>

	</div>
	<!-- SELESAI FOOTER -->

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="include/source/jquery.fancybox.css">
	<script type="text/javascript" src="include/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="include/lib/script.js"></script>

</body>
</html>
