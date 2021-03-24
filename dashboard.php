<!DOCTYPE html>
<html>
	<!-- HTML header, title, body tag, nav bar, css style -->
	<?php 
		include('includes/header.php'); 
		// include('includes/initialize.php'); 
	?>

	<div class="body-container">
		<div class="body-content-header">
			<h2 class="body-header">
				Dashboard
			</h2>
		</div>
		<div class="body-container-dashboard-page">
			<div class="user-info-container">
				<?php
					$userInfoQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
					// echo $userInfoQuery;
					$userInfoResult = $db->query($userInfoQuery);
					while($row = mysqli_fetch_assoc($userInfoResult)){
						echo "
						<div class=\"body-container-app-page\">
							<div class=\"user-container\">
								<div class=\"sign-up-resluts\">
								<p class=\"welcome-text\">Welcome, <span class=\"welcome-text-user\">".$row['memFirstName']."</span></p>
								</div>
								<div class=\"user-container-list-item\">
									<a href=\"updateinfo.php\">Update Infomation</a>
								</div>
							</div>
						</div>
						";
					};
				?>
			</div>
			<div class="app-search-container">
				<!-- display fav apps -->
				<?php
					$userQuery = "SELECT * FROM members WHERE memEmail='".$_SESSION['addEmail']."'";
					// echo $userInfoQuery;
					$userResult = mysqli_fetch_assoc($db->query($userQuery));
					$userId = $userResult['memId'];
					$appFavQuery = "SELECT * FROM addfav WHERE memId='{$userId}'";
					$appFavResult = $db->query($appFavQuery);

					

					while($row = mysqli_fetch_assoc($appFavResult)){
						// display all apps
						$aQuery = "SELECT * FROM apps WHERE appId= " .$row['appId'];
						// echo $appQuery;
						$aResult = mysqli_fetch_assoc($db->query($aQuery));
					echo"
						<div class=\"app-container\">
							<div class=\"app-container-list-item\">
								<a href=\"appdetails.php?id=".$aResult['appId']."\">
									<div class=\"app-image-container\">
										<img src=".$aResult['appImgUrl']." alt=".$aResult['appTitle']." class=\"appImage\">
									</div>
								</a>
									<div class=\"app-container-list-item\">
										<h2 class=\"app-title\">".$aResult['appTitle']."</h2>
									</div>
									<div class=\"app-container-list-item\">
										<p class=\"app-container-details\">".$aResult['appDescription']."</p>
									</div>
									<div class=\"app-container-list-item\">
										<h4 class=\"app-container-details genres-title\">".$aResult['appGenres']."</h4>
									</div>
									<div class=\"app-container-list-item\">
										<i class=\"fas fa-trash-alt remove\" id=\"".$row["appId"]."\"></i>
									</div>
								
							</div>
						</div>
						";
					};
				?>

				<script type="text/javascript">
					$(".remove").click(function(e){
						var storeId = this.id;


						$.ajax({
							method: "POST",
							url: "showfav.php",
							data:{"store_app_id": storeId}
						}).done(function(data){
							// var result = $.parseJSON(data);
							// var string='';
							console.log(data);
							$(e.target).parent().parent().parent().remove();

							// $.each(result, function(key, value){
							// })
							// if(data){
							// 	$(".app-container").remove();
							// }
						})
					})
				</script>
			</div>
		</div>

	</div>

</body>
</html>