<?php 
session_start();
include '../include/token.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<script type="text/javascript" src="../../assets/jquery.js"></script>
	<script type="text/javascript" src="../../assets/bs.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/bs.css">

	<style type="text/css">
		form {
			margin-top: 30px;
		}

		.text {
			margin-top: 15%;
			text-align: center;
		}

		.btn {
			margin:30px auto;
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
	<div class="container boxxx">
		<div class="row">
			<div class="text">
				<h3>Halaman Admin</h3>
				<h4>(yang bukan admin dilarang masuk)</h4>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-md-offset-2">
						<form role="form" action="proses_login.php" method="post">
							<div class="form-group">
								<input name="password" placeholder="Password" type="password" class="form-control" id="pwd">
							</div>
							<input type="hidden" name="erlich_bachman_this_is_your_mom_and_youre_not_my_baby___not_now_jian_yang__NOT_NOW" value="<?php echo $token ?>">
							<button type="submit" class="btn btn-raised btn-primary center-block">Masuk!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<div class="foo">
	<p>Created by:<br>NORMAN SYARIF | F1E115017</p>
</div>

</body>
</html>