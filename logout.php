<?php

	session_start();

	//unset session value
	unset($_SESSION['addEmail']);

	header("Location: index.php");

?>