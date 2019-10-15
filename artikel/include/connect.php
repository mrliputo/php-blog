<?php

$host = 'localhost';
$user = 'norman';
$pass = 'ajskalf';
$db = 'web';

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno) {
	echo 'gagal konek'.$mysqli->connect_error;
}

?>