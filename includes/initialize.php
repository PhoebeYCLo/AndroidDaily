<?php

	// trun on session
	session_start(); 

	require_once('includes/db_connection.php');
	$db = db_connect();
	mysqli_set_charset($db,"utf8");
	$errors = [];
?>