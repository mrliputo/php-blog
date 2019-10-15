<?php 
session_start();
include 'include/connect.php';
include 'include/get_post_and_comment.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artikel</title>
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

 <!-- MULAI ARTIKEL -->
 <div class="container" style="padding-top: 70px"> <!-- container semua -->
  <div class="row">
  	<div class="container col-md-7"> <!-- container artikel -->
      <div class="row">
        <div class="container col-md-11 col-xs-10 col-xs-offset-1">
          <div class="row">
            <?php include 'include/index-get-content.php' ?>
          </div>
        </div>
      </div>
    </div>
    <!-- SELESAI ARTIKEL -->

    <!-- MULAI SIDE BAR -->
    <div class="container col-md-3 col-xs-10 col-xs-offset-1">
      <div class="row">
        <!-- Search box -->
        <form action="search.php" id="searchbox" method="post" class="side-box">
         <h4 class="side-title">Pencarian</h4>
         <div class="foo" style="text-align: center">
           <input style="margin-right: 10px" class="input" name="s" placeholder="Apa yang kamu cari?" type="text">
           <button type="submit" id="search-btn" class="button" type="submit" name="search">Go</button>
         </div>
       </form>
       <!-- Kategori -->
       <div id="cat" class="side-box">
         <h4 class="side-title">Kategori</h4>
         <a href="index.php?programming"><button class="button center-block">Pemrograman</button></a>
         <a href="index.php?application"><button class="button center-block">Aplikasi</button></a>
         <a href="index.php?networking"><button class="button center-block">Jaringan Komputer</button></a>
         <a href="index.php?mobile"><button class="button center-block">Teknologi Mobile</button></a>
         <a href="index.php?os"><button class="button center-block">Sistem Operasi</button></a>
         <a href="index.php?database"><button class="button center-block">Basis Data</button></a>
       </div>
       <!-- Postingan terbaru -->
       <div id="side-rec-post" class="side-box">
         <h4 class="side-title">Postingan terbaru</h4>
         <?php include 'include/index-get-sb-post.php' ?>
       </div>
       <!-- Komentar terbaru -->
       <div id="side-rec-comment" class="side-box">
         <h4 class="side-title">Komentar terbaru</h4>
         <?php include 'include/index-get-sb-comment.php' ?>
       </div>
     </div>
   </div>
 </div>
</div>

<!--SELESAI SIDE BAR -->
<div class="clear"></div>
<!-- MULAI FOOTER -->
<div id="blog-footer">
  <!-- Footer atas -->
  <?php include '../assets/footer.php' ?>
</div>
<!-- SELESAI FOOTER -->

<script type="text/javascript" src="include/script.js"></script>

</body>
</html>