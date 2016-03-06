<?php
$link = mysqli_connect('localhost', 'iemploya_tully', '5aT3!PX5');
if (!$link) {
	$err = 'Unable to connect to the database server';
	include 'errmsg.html.php';
	exit();
}

if (!mysqli_select_db($link, 'iemploya_iemploy')) {
	$err = 'Unable to locate the necessary database';
	include 'errmsg.html.php';
	exit();
}
?>
