<?php
	// include('includes/header.php');
	include('includes/initialize.php'); 
	
	// $favapp = $_POST['addfav'];
	$storeAppId = $_POST['store_app_id'];

	// add app to fav 
	$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
	$userResult = mysqli_fetch_assoc($db->query($userQuery));
	$userId = $userResult['memId'];

	$insert = '';

	if(isset($_POST['store_app_id'])){
		$insert .= "INSERT INTO addfav (appId, memId) VALUES ('$storeAppId', '$userId')";
	}

	$insertfavResult = $db->query($insert);
	echo $insertfavResult;

	// list fav
	// $result_array = array();
	// $favsql = "SELECT * FROM addfav WHERE appId='$storeAppId' AND memId='$userId'";
	// $favsqlResult = $db->query($favsql);
	// echo $favsqlResult;

	// if ($favsqlResult->num_rows > 0) {
 //        while($row = $favsqlResult->fetch_assoc()) {
 //            array_push($result_array, $row);
 //        }
 //    }
 //     echo json_encode($result_array);
?>