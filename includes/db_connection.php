<?php

	//Define constant variables for the database.
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'phoebe_lo');
	 
	function db_connect(){
		$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		confirm_db_connect();
		return $connection;
	}
	

	function db_disconnect($connection){
		if (isset($connection)) {
			mysql_close($connection);
		}
	}

	function db_escape($connection, $string){
		return mysqli_real_escape_string($connection, $string);
	}

	function confirm_db_connect() {
	    if(mysqli_connect_errno()) {
	      $msg = "Database connection failed: ";
	      $msg .= mysqli_connect_error();
	      $msg .= " (" . mysqli_connect_errno() . ")";
	      exit($msg);
	    }
	}

	function confirm_result_set($result_set) {
	    if (!$result_set) {
	    	exit("Database query failed.");
	    }
	}


?>