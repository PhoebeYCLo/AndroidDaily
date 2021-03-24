<!DOCTYPE html>
<html>

	<!-- HTML header, title, body tag, nav bar, css style -->
	<?php include('includes/header.php'); ?>

	<div class="body-container">
		
		<div class="body-content-header">
			<h2 class="body-header">
				Hot Apps
			</h2>
		</div>
		<div class="body-content">
			<p>
				Our Hot Apps page lists the most talked about Android apps in the AndroidDaily community. Ranks are adjusted on a minute-by-minute basis to provide you with the hottest new apps on the App Store.
			</p>
		</div>
		<div class="body-container-app-page">
		<!-- filter -->

		<form class="filter-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<!-- app price -->
			<div class="filter-list-item">
				<h3>Price</h3>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail price" value="free" name="free" id="price-free">
						Free
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail price" value="paid" name="paid" id="price-paid">
						Paid
					</label>
				</div>
			</div>

			<!-- app genres -->
			<div class="filter-list-item">
				<h3>Genres</h3>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="beauty" name="beauty" id="gener-beauty">
						Beauty
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="books" name="books" id="gener-books">
						Books & Reference
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="business" name="business" id="gener-business">
						Business
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="communication" name="communication" id="gener-communication">
						Communication
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="education" name="education" id="gener-education">
						Education
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="entertainment" name="entertainment" id="gener-entertainment">
						Entertainment
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="events" name="events" id="gener-events">
						Events
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="finance" name="finance" id="gener-finance">
						Finance
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="food" name="food" id="gener-food">
						Food & Drink
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="health" name="health" id="gener-health">
						Health & Fitness
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="music" name="music" id="gener-music">
						Music & Audio
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="news" name="news" id="gener-news">
						News & Magazines
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="photography" name="photography" id="gener-photography">
						Photography
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="shopping" name="shopping" id="gener-shopping">
						Shopping
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="social" name="social" id="gener-social">
						Social
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="travel" name="travel" id="gener-travel">
						Travel & Local
					</label>
				</div>
				<div class="filter-list-item checkbox">
					<label>
						<input type="checkbox" class="appDetail geners" value="video" name="video" id="gener-video">
						Video Players & Editors
					</label>
				</div>
				<a type="button" id="filterResetBtn" value="Reset" name="reset" href="hotapps.php">Reset</a>
				<input type="button" id="filterSearchBtn" value="Search" name="submit">
			</div>
			</form>

			<!-- Apps List -->

		<div class="app-search-container">
			<?php
				// display all apps
				$aQuery = "SELECT * FROM apps";
				// echo $appQuery;
				$aResult = $db->query($aQuery);
				if (!$aResult) {
					die("query fail");
				}
				while($row = mysqli_fetch_assoc($aResult)){
					echo"
					<div class=\"app-container\">
						<div class=\"app-container-list-item\">
							<a href=\"appdetails.php?id=".$row['appId']."\">
								<div class=\"app-image-container\">
									<img src=".$row['appImgUrl']." alt=".$row['appTitle']." class=\"appImage\">
								</div>
							</a>
								<div class=\"app-container-list-item\">
									<h2 class=\"app-title\">".$row['appTitle']."</h2>
								</div>
								<div class=\"app-container-list-item\">
									<p class=\"app-container-details\">".$row['appDescription']."</p>
								</div>
								<div class=\"app-container-list-item\">
									<h4 class=\"app-container-details genres-title\">".$row['appGenres']."</h4>
								</div>
							
						</div>
					</div>
					";
				}
			?>
		</div>

		<script type="text/javascript">
			$(function(){
				$("#filterSearchBtn").on('click', function(){
					var priceFree = $("#price-free").is(':checked');
					var pricePaid = $("#price-paid").is(':checked');
					var generBeauty = $("#gener-beauty").is(':checked');
					var generBooks = $("#gener-books").is(':checked');
					var generBusiness = $("#gener-business").is(':checked');
					var generCommunication = $("#gener-communication").is(':checked');
					var generEducation = $("#gener-education").is(':checked');
					var generEntertainment = $("#gener-entertainment").is(':checked');
					var generEvents = $("#gener-events").is(':checked');
					var generFinance = $("#gener-finance").is(':checked');
					var generFood = $("#gener-food").is(':checked');
					var generHealth = $("#gener-health").is(':checked');
					var generMusic = $("#gener-music").is(':checked');
					var generNews = $("#gener-news").is(':checked');
					var generPhotography = $("#gener-photography").is(':checked');
					var generShopping = $("#gener-shopping").is(':checked');
					var generSocial = $("#gener-social").is(':checked');
					var generTravel = $("#gener-travel").is(':checked');
					var generVideo = $("#gener-video").is(':checked');

					var apps = $(".app-search-container").empty();

					$.ajax({
						method: "POST",
						url: "getappsresult.php",
						data:{"pFree": priceFree, "pPaid": pricePaid, "gBeauty": generBeauty, "gBooks": generBooks, "gBusiness": generBusiness, "gCommunication": generCommunication, "gEducation": generEducation, "gEntertainment": generEducation, "gEvents": generEvents, "gFinance": generFinance, "gFood": generFood, "gHealth": generHealth, "gMusic": generMusic, "gNews": generNews, "gPhotography": generPhotography, "gShopping": generShopping, "gSocial": generSocial, "gTravel": generTravel, "gVideo": generVideo}
					}).done(function(data){
						console.log(data);
						var result = $.parseJSON(data);

						var string='';

						$.each(result, function(key, value){

								// string += '<div class="app-container"><div class="app-container-list-item"><a href="appdetails.php?id="'+value['appId']+'"><div class="app-image-container"><img src='+value['appImgUrl']+' alt='+value['appTitle']+' class=appImage></div><div class="app-container-list-item"><h2 class="app-title">'+value['appTitle']+'</h2></a></div><div class="app-container-list-item"><p class="app-container-details">'+value['appDescription']+'</p></div><div class="app-container-list-item"><h4 class="app-container-details genres-title">'+value['appGenres']+'</h4></div></div></div>';

								string += '<div class="app-container"><div class="app-container-list-item"><a href="appdetails.php?id='+value['appId']+'"><div class="app-image-container"><img src='+value['appImgUrl']+' alt='+value['appTitle']+' class=appImage></div><div class="app-container-list-item"><h2 class="app-title">'+value['appTitle']+'</h2></a></div><div class="app-container-list-item"><p class="app-container-details">'+value['appDescription']+'</p></div><div class="app-container-list-item"><h4 class="app-container-details genres-title">'+value['appGenres']+'</h4></div></div></div>';
							});

				

							$(".app-search-container").append(string);

					})
				})
			});
		</script>
		</div>		
	</div>
</body>
</html>