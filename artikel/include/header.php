<?php session_start() ?>
<!-- START -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <script type="text/javascript" src="../../../assets/jquery.js"></script>
  <script type="text/javascript" src="../../../assets/bs.js"></script>
  <link rel="stylesheet" type="text/css" href="../../../assets/bs.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/style.css">
  <link rel="stylesheet" type="text/css" href="../../include/codemirror/lib/codemirror.css">
  <script type="text/javascript" src="../../include/codemirror/lib/codemirror.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/xml/xml.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/css/css.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/clike/clike.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/javascript/javascript.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/php/php.js"></script>
  <script type="text/javascript" src="../../include/codemirror/mode/shell/shell.js"></script>
  <script type="text/javascript" src="../../include/codemirror/addon/scroll/simplescrollbars.js"></script>
  <link rel="stylesheet" type="text/css" href="../../include/codemirror/addon/scroll/simplescrollbars.css">
  <link rel="stylesheet" type="text/css" href="../../include/codemirror/theme/ttcn.css">
</head>

<body id="body">

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
          <li><a href="../../../">Beranda</a></li>
          <li><a href="../../index.php"><span class="besar-sedikit">Artikel</span></a></li>
          <li><a href="../../../galeri">Media</a></li>
          <li><a href="../../../kontak">Kontak</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right login" id="login-biasa-white">

         <?php
         if(!isset($_SESSION['username'])) {
          echo "<p>Halaman admin,<br><a href='../../halaman_admin/login.php'>silahkan login</a></p>";
        }else{
          echo "<p>Telah masuk sebagai <u><a href='../../halaman_admin/admin.php'>".$_SESSION['username']."</a></u>
          <br><a href='../../halaman_admin/proses_logout.php'>Logout</a></p>";
        }
        ?>

      </ul>
    </div>
  </div>
</nav>

<div class="container" style="padding-top: 70px">
  <div class="row">
    <div class="container col-md-7">
     <div class="row">
      <div class="container col-md-12 col-xs-10 col-xs-offset-1">
        <div class="row">
          <div class="ar-box isi-artikel">

<!-- Article info -->