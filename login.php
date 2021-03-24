<!DOCTYPE html>
<html>

	<!-- HTML header, title, body tag, nav bar, css style -->
	<?php 
		include('includes/header.php'); 
		// include('includes/initialize.php'); 
	?>

	<?php

		function has_string($value, $required_string) {
    		return strpos($value, $required_string) !== false;
  		}


		$errors = [];
		$email = '';
		$password = '';

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$email = $_POST['email'] ?? '';
			$password = $_POST['password'] ?? '';
			// $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			if (!empty($email) && has_string($email, '@')) {
				// $_SESSION['email'] = $email;
			} else {
				$errors['email'] = "Please enter a format email with abc@gmail.com";
			}

			if (!empty($password)) {
		        // $_SESSION['password'] = $password;
		    } else {
		        $errors['password'] = "Please fill in a password";
		    }

		    //if no error
		    if (count($errors) == 0) {
		    	$query ="SELECT * FROM members WHERE memEmail = '{$email}'";
		    	$result = $db->query($query);

		    	if(!$result) {
		    		echo "query failed";
		    	}

		    	while ($row = mysqli_fetch_assoc($result)) {
		    		if(password_verify($password, $row['memPassword'])) {
		    			$_SESSION['addEmail'] = $email;
		    			$db->close();
        			header("Location: index.php");
		    		} else{
		    			echo "<script type='text/javascript'>alert('Please try again!')</script>";
		    		}
		    	}


		    	// print_r($_SESSION);
		    		

		    }
		}

	?>
	
	<div class="body-container">
		<div class="login">
			<h2 class="form-header">Login</h2>
			<!-- <form action="login.php" method="post"> -->
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<label for="email">
					<i class="fas fa-envelope-square"></i>
				</label>
				<input type="text" name="email" placeholder="Email" id="email">
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password">
				<p>Do not have an account? <a href="signup.php">Sign up here</a>.</p>
				<input type="submit" value="Login">
			</form>
		</div>	
	</div>

</body>
</html>