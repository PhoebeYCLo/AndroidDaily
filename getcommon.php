<?php
	// include('includes/header.php');
	include('includes/initialize.php'); 
	
	$uComment = $_POST['user_comment'];
	$storeAppId = $_POST['store_app_id'];
	

	// add comment
	$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
	$userResult = mysqli_fetch_assoc($db->query($userQuery));
	$userId = $userResult['memId'];
	$userName = $userResult['memFirstName'];
	$date = date('Y-m-d H:i:s');
	$insertCommentQuery = "INSERT INTO comments (appId, memId, comment, comCreateDate, memFirstName) VALUES ('$storeAppId', '$userId','$uComment', '$date', '$userName')";
	$insertCommentResult = $db->query($insertCommentQuery);

	// list comment
	$result_array = array();
	$commentsql = "SELECT * FROM comments WHERE appId='$storeAppId'";
	$commentsqlResult = $db->query($commentsql);

	if ($commentsqlResult->num_rows > 0) {
        while($row = $commentsqlResult->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
     echo json_encode($result_array);
?>