<?php
session_start();
include 'artikel/include/connect.php';
$post = $mysqli->query("SELECT * FROM post ORDER BY date DESC LIMIT 3");
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Life is easy if you stop worrying</title>
    <script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript" src="assets/bs.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/bs.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
  </head>

  <body>

<!-- MULAI NAVBAR -->
<!-- Navbar transparan -->

<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid wrapper">
    <div class="navbar-header" id="header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="http://normansyarif.xyz">Norman Syarif</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="navnav">
        <li><a href="index.php"><span class="besar-sedikit">Beranda</span></a></li>
	       <li><a href="artikel">Artikel</a></li>
	       <li><a href="galeri">Media</a></li>
	       <li><a href="kontak">Kontak</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right login" id="login-biasa-black">

        <?php
        if(!isset($_SESSION['username'])) {
          echo "<p>Halaman admin,<br><a href='artikel/halaman_admin/login.php'>silahkan login</a></p>";
        }else{
          echo "<p>Telah masuk sebagai <u><a href='artikel/halaman_admin/admin.php'>".$_SESSION['username']."</a></u>
          <br><a href='artikel/halaman_admin/proses_logout.php'>Logout</a></p>";
        }
        ?>

      </ul>
    </div>
  </div>
</nav>

<!-- Navbar fixed -->
  <nav class="navbar navbar-default shadow" id="navbar-fixed">
  <div class="container-fluid wrapper">
    <div class="navbar-header" id="header-fixed" class="shadow">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarFixed">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="http://normansyarif.xyz">Norman Syarif</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbarFixed">
      <ul class="nav navbar-nav" id="navnav">
        <li><a href="index.php"><span class="besar-sedikit">Beranda</span></a></li>
	       <li><a href="artikel">Artikel</a></li>
	       <li><a href="galeri">Media</a></li>
	       <li><a href="kontak">Kontak</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right login" id="login-fixed">

      	<?php
        if(!isset($_SESSION['username'])) {
          echo "<p>Halaman admin,<br><a href='artikel/halaman_admin/login.php'>silahkan login</a></p>";
        }else{
          echo "<p>Telah masuk sebagai <u><a href='artikel/halaman_admin/admin.php'>".$_SESSION['username']."</a></u>
          <br><a href='artikel/halaman_admin/proses_logout.php'>Logout</a></p>";
        }
        ?>

      </ul>
    </div>
  </div>
</nav>

<!-- Billboard -->
  <div id="dibawah-header"  >
    <div id="text-on-background">
      <div id="big">NORMAN SYARIF</div>
      <div id="small">Selamat datang!</div>
      <div id="btn-scroll">
        <button>Mulai!</button>
      </div>
    </div>
  </div>


<!-- SELESAI NAVBAR DAN BILLBOARD -->

<!-- MULAI POSTINGAN TERBARU (HOME) -->
  <div class="container" id="rec-post">
    <h1 class="h1-home">Postingan terbaru</h1>
    	<div class="row">
    <?php

    if($post->num_rows > 0) {
      while($row=$post->fetch_assoc()){
        echo "
	        <div class='col-xs-12 col-sm-6 col-md-4 ar'>
	          <img src='artikel/post/".$row['path']."/pic.jpg'>
	          <p class='col-centered ar-title-home'><a href='artikel/post/".$row['path']."'>".$row['title']."</a></p>
	          <p class='col-centered ar-cont'>".substr($row['description'], 0, 200)."...</p>
	        </div>
        ";
      }
    }

    ?>
    </div>

	  <div id="btn-xplore" class="container">
	  	<div class="row">
	  	<div class="col-md-5 col-md-offset-3">
	  		<div class="row">
			    <a href="artikel"><button id="xp">Lebih banyak...</button></a>
			    <button id="about">Tentangku</button>
			   </div>
	  	</div>
	  	</div>
	  </div>

  </div>
<!-- SELESAI POSTINGAN TERBARU -->

<!-- FOTO TERBARU (GALERI) -->
  <div class="container-fluid" id="pics">
  	<div class="row">
	    <a href="galeri/">  
	      <img class="center-block col-md-3 img-responsive" src="img/p1.jpg">
	      <img class="center-block col-md-3 img-responsive" src="img/p2.jpg">
	      <img class="center-block col-md-3 img-responsive" src="img/p3.jpg">
	      <img class="center-block col-md-3 img-responsive" src="img/p4.jpg">
	    </a>
	  </div>
  </div>

  <div class="clear"></div>
<!-- SELESAI GALERI -->

<!-- MULAI TENTANG -->
	<div class="container">
		<div class="row">
		  <div id="about-me">
		    <h1 class="h1-home">Tentangku</h1>
		    <div class="col-md-3" id="prof-img">
		    	<img class="center-block shadow img-responsive" src="img/prof.jpg">
		    </div>
		    <div class="col-md-9" id="prof-txt">
		    	<p>Namaku <strong>Norman Syarif</strong>, biasa dipanggil Norman. Aku lahir di Teluk Kiambang, propinsi Riau, pada tanggal 27 February 1997. Aku adalah mahasiswa Sistem Informasi semester 3 di Universitas Jambi. Saat ini, aku ikut dalam organisasi yang bernama GREVTECH, yaitu organisasi yang bergerak di bidang teknologi. Aku adalah penulis di website/blog ini, dan kuharap artikel-artikel yang kuposting dapat menambah wawasan dan menjadi inspirasi bagi pembaca.</p>
		    </div>
		  </div>
		</div>
	</div>

  <div class="clear"></div>
<!-- SELESAI TENTANG -->

<!-- MULAI FOOTER -->
  <div class="container" id="footer">
<!-- Footer atas -->
    <?php include 'assets/footer.php' ?>

  </div>
<!-- SELESAI FOOTER -->

  <script type="text/javascript" src="assets/script.js"></script>

  </body>
</html>
