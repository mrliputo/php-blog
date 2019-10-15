<?php
if(isset($_GET['programming'])) {
	$post = $mysqli->query("SELECT * FROM post WHERE category='pemrograman' ORDER BY date DESC LIMIT 3");
}else if(isset($_GET['application'])) {
	$post = $mysqli->query("SELECT * FROM post WHERE category='aplikasi' ORDER BY date DESC LIMIT 3");
}else if(isset($_GET['networking'])) {
	$post = $mysqli->query("SELECT * FROM post WHERE category='jaringan komputer' ORDER BY date DESC LIMIT 3");
}else if(isset($_GET['mobile'])) {
	$post = $mysqli->query("SELECT * FROM post WHERE category='teknologi mobile' ORDER BY date DESC LIMIT 3");
}else if(isset($_GET['os'])) {
	$post = $mysqli->query("SELECT * FROM post WHERE category='sistem operasi' ORDER BY date DESC LIMIT 3");
}else if(isset($_GET['database'])){
	$post = $mysqli->query("SELECT * FROM post WHERE category='basis data' ORDER BY date DESC LIMIT 3");
}else{
	$post = $mysqli->query("SELECT * FROM post ORDER BY date DESC LIMIT 3");
}

$post_sb = $mysqli->query("SELECT * FROM post ORDER BY date DESC LIMIT 3");
$comment_sb = $mysqli->query("SELECT * FROM post INNER JOIN comment ON post.id=comment.post_id ORDER BY comment.date DESC LIMIT 3");
?>