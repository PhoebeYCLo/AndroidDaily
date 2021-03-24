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
		$firstName = '';
		$lastName = '';
		$email = '';
		$password = '';

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//set session value
			$firstName = $_POST['firstname'] ?? '';
			$lastName = $_POST['lastname'] ?? '';
			$email = $_POST['email'] ?? '';
			$password = $_POST['password'] ?? '';
			$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			if (!empty($firstName)) {
				// $_SESSION['firstName'] = $firstName;
			} else {
				$errors['firstName'] = "Please fill in your first name";
			}

			if (!empty($lastName)) {
				// $_SESSION['lastName'] = $lastName;
			} else {
				$errors['lastName'] = "Please fill in your last name";
			}

			if (!empty($email) && has_string($email, '@')) {
				// $_SESSION['email'] = $email;
			} else {
				$errors['email'] = "Please enter a format email with abc@gmail.com";
			}

			//if no error
			if (count($errors) == 0) {
		// 		//check account already exist or not
				$checkQuery = "SELECT * FROM members WHERE memEmail = '{$email}'";
				$result = $db->query($checkQuery);

				//if account has same credentials already exist
				if ($result->num_rows > 0) {
					//if exist
					$errors['acc'] = "The account has already been registered, please try to login or sign up with a different account";
					echo "<script type='text/javascript'>alert('The account has already been registered, please try to login or sign up with a different account')</script>";
				} else {
					//import to database
					$query = "INSERT INTO members (memFirstName, memLastName, memEmail, memPassword) VALUES ('$firstName', '$lastName', '$email', '$hashed_password')";

					echo $query;
					$result2 = $db->query($query);
					if ($result2) {
						$_SESSION['addEmail'] = $email;
					}
        			$db->close();
        			header("Location: index.php");
        			//exit();
				}
			}

		}

	?>


	<div class="body-container">
		<!-- sign up form -->

		<div class="login">
			<h2 class="form-header">Sign up an account</h2>
			<!-- <form action="signup.php" method="post"> -->
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<input type="text" name="firstname" placeholder="First name" id="firstname">
				<input type="text" name="lastname" placeholder="Last name" id="lastname">
				<input type="text" name="email" placeholder="Email" id="email">
				<input type="password" name="password" placeholder="Password" id="password">
				<p>Already have an account? <a href="login.php">Log in here</a>.</p>
				<input type="submit" value="Sign up">
			</form>
		</div>
	</div>

</body>
</html>