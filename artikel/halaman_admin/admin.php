<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_SESSION['username'] ?></title>
	<script type="text/javascript" src="../../assets/jquery.js"></script>
	<script type="text/javascript" src="../../assets/bs.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/bs.css">

	<style type="text/css">

		#alert {
			margin-top: 30px;
		}

		.alerttt {
			margin-top: 50px;
		}

		button {
			margin-left: 20px;
		}

		.foo {
			position: fixed;
			width: 100%;
			height: 60px;
			bottom: 0;
			background-color: #212121;
			font-weight: bold;
		}

		.foo p {
			color: white;
			text-align: center;
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<div class="container">
		<a href="proses_logout.php"><button class="btn btn-danger pull-right" style="margin-top: 20px">Logout</button></a>
		<a href="../../"><button class="btn btn-success pull-right" style="margin-top: 20px">Beranda</button></a>
		<div class="row alerttt">
			<div id="alert" class="alert alert-success fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo "Selamat datang, ".$_SESSION['username']."!" ?></div>	
				<div id="alert" class="alert alert-info fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Halaman admin masih dalam tahap pengembangan!</div>	
				</div>
			</div>

			<div class="foo">
				<p>Created by:<br>NORMAN SYARIF | F1E115017</p>
			</div>

		</body>
		</html>