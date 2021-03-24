<!DOCTYPE html>
<html>
	
	<!-- HTML header, title, body tag, nav bar, css style -->
	<?php include('includes/header.php'); ?>

	<div class="body-container">
		<?php
			
			// set a text file, name "user_info" to save user info 
			$file = 'user_info.txt';

			//if the form was submitted
			if (isset($_POST['submit'])) {
				// check if each form input was filled, if not, set the variable to empty string
				if (isset($_POST['name'])) {
					$name = $_POST['name'];
				}
				else{
					$name = '';
				}

				if (isset($_POST['email'])) {
					$email = $_POST['email'];
				}
				else{
					$email = '';
				}

				if (isset($_POST['password'])) {
					$password = $_POST['password'];
				}
				else{
					$password = '';
				}

				// check if the file is not empty
				if (filesize("user_info.txt") > 0) {
					// load info file
					$userFile = file_get_contents("user_info.txt");

					// divide in new line
					$userArray = explode("\n", $userFile);

					// get the last user
					$lastUser = end($userArray);

					// make it into fields
					$lastUser = explode(" | ", $lastUser);

					// get ID
					$lastUserID = $lastUser[0];

					$userDataString = "\n".($lastUserID+1)." | ".$name." | ".$email." | ".$password;
				}

				else{
					$userDataString = "1 | ".$name." | ".$email." | ".$password;
				}

				// using an all in one function - file_put_contents(), this function is equivalent fopen(), fwrite() and fclose()
				// write the user info into the user_info.txt file
				file_put_contents($file, $userDataString, FILE_APPEND);

				// inform the user that the account was created
				echo "<div id=\"sign-up-results\">
				<h2>Your account was created!</h2>
				<p>Welcome, ".$name."</p>
				</div>";

			}

			else{
				echo "Submit button was not clicked.<br>";
			}

			?>
	</div>

</body>
</html>


