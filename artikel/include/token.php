<?php

$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

?>