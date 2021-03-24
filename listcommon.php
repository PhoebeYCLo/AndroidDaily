<?php

	// add comment
	$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
	$userResult = mysqli_fetch_assoc($db->query($userQuery));
	$userId = $userResult['memId'];
	$userName = $userResult['memFirstName'];
	$date = date('Y-m-d H:i:s');
	$insertCommentQuery = "INSERT INTO comments (appId, memId, comment, comCreateDate, memFirstName) VALUES (".$_GET['id'].", '$userId','$comment', '$date', '$userName')";
	$insertCommentResult = $db->query($insertCommentQuery);

?>