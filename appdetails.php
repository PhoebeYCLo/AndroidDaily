<!DOCTYPE html>
<html>
	<!-- HTML header, title, body tag, nav bar, css style -->
	<?php 
		include('includes/header.php');
	?>

	<div class="body-container">
		<?php
			// display apps
			$appInfoQuery = "SELECT * FROM apps WHERE appId='".$_GET['id']."'";
			// echo $appInfoQuery;
			$appInfoResult = $db->query($appInfoQuery);

			while($row = mysqli_fetch_assoc($appInfoResult)){
				// check is user log in or not
				if (isset($_SESSION['addEmail'])) {
					$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
					// echo $userInfoQuery;
					$userResult = mysqli_fetch_assoc($db->query($userQuery));
					$userId = $userResult['memId'];

					$appFavQuery = "SELECT * FROM addfav WHERE appId='".$_GET['id']."'"AND "memId='{$userId}'";
					$appFavResult = $db->query($appFavQuery);
					$rowcount = mysqli_num_rows($appFavResult);
					if ($rowcount > 0) {
						
					}
				} 
				// $userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
				// // echo $userInfoQuery;
				// $userResult = mysqli_fetch_assoc($db->query($userQuery));
				// $userId = $userResult['memId'];
				
				// $appFavQuery = "SELECT * FROM addfav WHERE appId='".$_GET['id']."'"AND "memId='{$userId}'";
				// $appFavResult = $db->query($appFavQuery);
				// $rowcount = mysqli_num_rows($appFavResult);
				// if ($rowcount > 0) {
					
				// }

				echo"
					<div class=\"apppost-container\">
						<div class=\"apppost-info\">
							<div class=\"app-post-list-item\">
								<img src=".$row['appImgUrl']." alt=".$row['appTitle']." class=\"appImage\">
							</div>";
				echo "
				<div class=\"app-post-list-item\">
					<div class=\"bookmark-icon\">
					";
					// if member loged in, bookmark will be display, member can bookmark the app
					if(isset($_SESSION['addEmail'])){
						$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
						// echo $userInfoQuery;
						$userResult = mysqli_fetch_assoc($db->query($userQuery));
						$userId = $userResult['memId'];
						
						$appFavQuery = "SELECT * FROM addfav WHERE appId='".$_GET['id']."'"AND "memId='{$userId}'";
						$appFavResult = $db->query($appFavQuery);
						$rowcount = mysqli_num_rows($appFavResult);
						if ($rowcount > 0) {
							echo"<i class=\"fas fa-bookmark liked\" id=".$row['appId']." style=\"color:yellow;\"></i>
							";
						} else{
							echo"<i class=\"far fa-bookmark addFav\" id=".$row['appId']."></i>";
						}
					}
					// $userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
					// // echo $userInfoQuery;
					// $userResult = mysqli_fetch_assoc($db->query($userQuery));
					// $userId = $userResult['memId'];
					
					// $appFavQuery = "SELECT * FROM addfav WHERE appId='".$_GET['id']."'"AND "memId='{$userId}'";
					// $appFavResult = $db->query($appFavQuery);
					// $rowcount = mysqli_num_rows($appFavResult);
					// if ($rowcount > 0) {
					// 	echo"<i class=\"fas fa-bookmark liked\" id=".$row['appId']." style=\"color:yellow;\"></i>
					// 	";
					// } else{
					// 	echo"<i class=\"far fa-bookmark addFav\" id=".$row['appId']."></i>";
					// }
					echo "		
								</div>
							</div>
							<div class=\"app-post-list-item\">
								<p class=\"app-container-head\">Genres:</p>
								<p class=\"app-container-details\">".$row['appGenres']."</p>
							</div>
							<div class=\"app-post-list-item\">
								<p class=\"app-container-head\">Updated Date:</p>
								<p class=\"app-container-details\">".$row['appUpdatedDate']."</p>
							</div>
							<div class=\"app-post-list-item\">
								<p class=\"app-container-head\">App Version:</p>
								<p class=\"app-container-details\">".$row['appVersion']."</p>
							</div>
							<div class=\"app-post-list-item\">
								<p class=\"app-container-head\">App Price:</p>
								<p class=\"app-container-details\">".$row['appPrice']."</p>
							</div>
						</div>
						<div class=\"apppost-description\">
							<div class=\"app-post-list-item\">
								<h2 class=\"app-title\" id=\"".$row['appId']."\">".$row['appTitle']."</h2>
							</div>
							<div class=\"app-post-list-item\">
								<p class=\"app-container-head\">Description:</p>
								<p class=\"app-container-details\">".$row['appDescription']."</p>
							</div>
						</div>
					</div>
				";

			};

		?>
		
		<!-- Comment Section -->
		<div class="comment-section">
			<div class="comment-section-header">
				<h2 class="comment-header">
					Reviews
				</h2>
			</div>
			<form action="<?php echo "appdetails.php?id=".$_GET['id'];?>" method="post">
				<textarea class="usercomment" name="usercomment" rows="4" cols="80" ">Tell others what you think about this app. Would you recommend it and why?</textarea>
				<input type="button" name="submit" class="submit-button" value="Sumbit">
			</form>

			<!-- comment display -->
			<?php
				$commentQuery = "SELECT * FROM comments WHERE appId='".$_GET['id']."'";
					// echo $commentQuery;
					$commentResult = $db->query($commentQuery);

					while($row = mysqli_fetch_assoc($commentResult)){
						echo "<div class=\"display-comments-container\">
						<div class=\"commenter-container\">
						<p class=\"commenter\">".$row['memFirstName']."</p>
						<p class=\"comment-date\"><br>".$row['comCreateDate']."</p>
						</div>
						<div class=\"display-comments\">
						<p>".$row['comment']."</p>
						</div>
						</div>
						";
					};
			?>
			</div>
			

			<!-- ajax part -->
			<script type="text/javascript">
				$(function(){
					// when user click the sumbit button, it will get the comment value and the appId
					$(".submit-button").on('click', function(){
						var comment = $(".usercomment").val();
						var storeId = $(".app-title").attr("id");

						// the value will pass to getcommon.php
						$.ajax({
							method: "POST",
							url: "getcommon.php",
							data:{"user_comment": comment, "store_app_id": storeId}
						}).done(function(data){
							console.log(data);
							// console.log("here");
							var result = $.parseJSON(data);

							var string='';

							$.each(result, function(key, value){
								
								string += '<div class="display-comments-container"><div class="commenter-container"><p class="commenter">'+value['memFirstName']+'</p><p class="comment-date"><br>'+value['comCreateDate']+'</p></div><div class="display-comments"><p>'+value['comment']+'</p></div></div>';
							});

				
							// add result to the comment-section part
							$(".comment-section").append(string);


							})
					}) 

					$(".addFav").click(function(){
						// var fav = $(".addFav").is(':checked');
						
						// alert(this.id);
						var storeId = this.id;
						// alert(storeId);
						if($(this).hasClass("addFav")){
							$.ajax({
								method: "POST",
								url: "editfav.php",
								data:{"store_app_id": storeId}
							}).done(function(data){

								console.log(data);
								if (data) {
									$(".fa-bookmark").css("backgroundColor", "yellow");
									$(".fa-bookmark").removeClass("addFav");
									$(".fa-bookmark").addClass("liked");
								}
							})
						}

						
					});

					$(".bookmark-icon").on("click", ".liked", function() {
						alert("You already liked this app");
					})

				// $(".liked").click(function() {
				// 	alert("You already liked this app");
			 	})


			</script>
		</div>
	</div>

</body>
</html>