<?php

session_start();

require_once('connect.php');

function anti_hacker($gak_safe) {
		$udah_safe = stripslashes(strip_tags(htmlspecialchars($gak_safe, ENT_QUOTES)));
		return $udah_safe;
}

$path = $mysqli->real_escape_string(anti_hacker($_POST['path']));

if(isset($_SESSION['token']) && $_POST['token'] == $_SESSION['token']) {
	date_default_timezone_set("Asia/Jakarta");

	$name = $mysqli->real_escape_string(anti_hacker($_POST['name']));
	$email = $mysqli->real_escape_string(anti_hacker($_POST['email']));
	$content = $mysqli->real_escape_string(anti_hacker($_POST['content']));
	$date = $mysqli->real_escape_string(anti_hacker(date("Y-m-d H:i:s")));
	$id = $mysqli->real_escape_string(anti_hacker($_POST['id']));
	$query = "INSERT INTO comment (name, email, date, content, post_id) VALUES ('$name','$email','$date','$content','$id')";

	if($mysqli->query($query)) {
		header("Location: ../post/$path");
	}else{
		echo "Posting komen gagal!<br><a href='../post/$path'>Kembali</a>";
	}

}else{
	echo "Token tidak valid.<br>Posting komen gagal!<br><a href='../post/$path'>Kembali</a>";
}

?>