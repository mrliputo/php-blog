<?php

 session_start();

include '../include/connect.php';

function anti_hacker($gak_safe) {
		$udah_safe = stripslashes(strip_tags(htmlspecialchars($gak_safe, ENT_QUOTES)));
		return $udah_safe;
	}

if(isset($_SESSION['token']) && $_POST['erlich_bachman_this_is_your_mom_and_youre_not_my_baby___not_now_jian_yang__NOT_NOW'] == $_SESSION['token']) {

$pass = anti_hacker(md5($_POST['password']));
$query = "SELECT username FROM users where password='$pass'";
$result = $mysqli->query($query);
if($result->num_rows != 0) {
	while($row=$result->fetch_assoc()) {
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
	}
}else{
	echo "Password salah!<br><a href='login.php'>Kembali</a>";
}

// $result = $mysqli->query($query);

// if($result->num_rows > 0) {
// 	while($row = $result->fetch_assoc()) {
// 		echo $row['password'];
// 	}
// }else{
// 	echo "nothing";
// }
	
	// $pass = $mysqli->real_escape_string(anti_hacker($_POST['password']));
	// $query = "SELECT * FROM users WHERE password='$pass'";
	// $result = $mysqli->query($query);

	// if($result->num_rows!=0) {
	// 	while ($row = $result->fetch_assoc()) {
	// 		if(md5($pass) == $row['password']) {
	// 			$_SESSION['password']=$row['password'];
	// 			header("Location: admin.php");
	// 		}else{
	// 			echo "Wrong password!";
	// 		}
	// 	}
	}else {
		echo "no";
	}
?>