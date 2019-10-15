<?php


//RETRIVE CODE FROM DATABASE AND ASSIGN THEM IN VARIABLES
$get_from_db = $mysqli->query("SELECT * FROM post WHERE id=$id")->fetch_assoc();

$title = $mysqli->real_escape_string($get_from_db['title']);
$date = $mysqli->real_escape_string(date_format(date_create($get_from_db['date']),"j F Y"));
$cat = $mysqli->real_escape_string($get_from_db['category']);
$comment_id = $mysqli->real_escape_string($get_from_db['comment_id']);
$comment = $mysqli->query("SELECT * FROM comment WHERE post_id=$id ORDER BY date DESC");
$tags = $mysqli->real_escape_string($get_from_db['tags']);
$description = $mysqli->real_escape_string($get_from_db['description']);
$path = $mysqli->real_escape_string($get_from_db['path']);
//FINISHED

?>