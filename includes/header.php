<head>
	<title>Android Daily</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/9e8ebbf3dc.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/navstyle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
	<?php
	 	include('includes/initialize.php'); 
	?>

	<header class="header fixed-header">
		<div class="header-container">
			<div class="header-item">
				<a href="index.php">
					<h1 class="logo">
						AndroidDaily
					</h1>
				</a>
			</div>
			<div class="header-item">
				<nav class="header-nav">
					<div class="nav-container">
						<div class="nav-item">
							<a class="header-nav-link" href="index.php">Home</a>
						</div>
						<div class="nav-item">
							<a class="header-nav-link" href="news.php">News</a>
						</div>
						<div class="nav-item">
							<a class="header-nav-link" href="hotapps.php">Hot Apps</a>
						</div>
						<div class="nav-item">
							<!-- <a class="header-nav-link" href="login.php">Log In</a> -->
							<?php

								if (isset($_SESSION['addEmail'])) {
									// if login success, nav bar will add a dashboard page and "log in" change to "log out"
									echo '<a href = "dashboard.php" class="header-nav-link"><span>Dashboard</span></a>';
									echo '<a href = "logout.php" class="header-nav-link"><span>Log Out</span></a>';
								} else{
									// if login unsuccess, no change to the nav bar
									echo '<a href="login.php" class="header-nav-link"><span>Log In</span></a>';
								}
							?>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
</body>