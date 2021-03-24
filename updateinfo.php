<!DOCTYPE html>
<html>
	<!-- HTML header, title, body tag, nav bar, css style -->
	<?php 
		include('includes/header.php'); 
		// include('includes/initialize.php'); 
	?>

	<?php
		$password = '';

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$password = $_POST['password'] ?? '';
			$password = password_hash($password, PASSWORD_DEFAULT);

			if (!empty($password)) {
		        // $_SESSION['password'] = $password;
		    } else {
		        $errors['password'] = "Please fill in a password";
		    }

		    //if no error
		    if (count($errors) == 0) {
		    	// $userInfoquery ="SELECT * FROM members WHERE memEmail = '{$email}'";
		    	// $userInforesult = $db->query($userInfoquery);

		    	$updatePwQuery = "UPDATE members SET memPassword = '{$password}' WHERE memEmail = '".$_SESSION['addEmail']."'";
		    	$userPwresult = $db->query($updatePwQuery);

		    	if(!$userPwresult) {
		    		echo "query failed";
		    	}


		    	// print_r($_SESSION);
		    	$db->close();
        		// header("Location: index.php");
        		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";

		    }
		};
	?>

	<div class="body-container">
		<div class="body-content-header">
			<h2 class="body-header">
				Update user infomation
			</h2>
		</div>
		<div class="body-container-dashboard-page">
			<div class="login">
				<h2 class="form-header">Change Password</h2>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<p>Enter new password:</p>
					<input type="password" name="password" placeholder="Password" id="password">
					<input type="submit" value="Update">
				</form>
			</div>	
		</div>
	</div>

</body>
</html>