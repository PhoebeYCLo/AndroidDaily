<?php
	// include('includes/header.php');
	include('includes/initialize.php'); 
	
	$storeAppId = $_POST['store_app_id'];
	

	// get user info
	$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
	$userResult = mysqli_fetch_assoc($db->query($userQuery));
	$userId = $userResult['memId'];

	// remove
	// $removeQuery = "DELETE FROM addfav WHERE appId=" .$storeAppId. "AND memId=".$userId;
	$removeQuery = "DELETE FROM addfav WHERE appId= '$storeAppId' AND memId='$userId'";
	$removeResult = $db->query($removeQuery);
	echo $removeResult;

	// $result_array = array();

	// if ($removeResult->num_rows > 0) {
 //        while($row = $removeResult->fetch_assoc()) {
 //            array_push($result_array, $row);
 //        }
 //    }
 //     echo json_encode($result_array);
?>