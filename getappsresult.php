<?php
	// include('includes/header.php');
	include('includes/initialize.php'); 

	$appFree = $_POST['pFree'];
	$appPaid = $_POST['pPaid'];
	$appBeauty = $_POST['gBeauty'];
	$appBooks = $_POST['gBooks'];
	$appBusiness = $_POST['gBusiness'];
	$appCommunication = $_POST['gCommunication'];
	$appEducation = $_POST['gEducation'];
	$appEntertainment = $_POST['gEntertainment'];
	$appEvents = $_POST['gEvents'];
	$appFinance = $_POST['gFinance'];
	$appFood = $_POST['gFood'];
	$appHealth = $_POST['gHealth'];
	$appMusic = $_POST['gMusic'];
	$appNews = $_POST['gNews'];
	$appPhotography = $_POST['gPhotography'];
	$appShopping = $_POST['gShopping'];
	$appSocial = $_POST['gSocial'];
	$appTravel = $_POST['gTravel'];
	$appVideo = $_POST['gVideo'];

	$result_array = array();

	// generate the select string
	$select = "SELECT * FROM apps WHERE ";

	//generate the where string
	$where = "";
	// echo $_POST['appTravel'];
	// if (
	// 	isset($_POST['pFree']) && !empty($_POST['pFree']) || isset($_POST['pPaid']) && !empty($_POST['pPaid']) || isset($_POST['gBeauty']) && !empty($_POST['gBeauty']) || isset($_POST['gBooks']) && !empty($_POST['gBooks']) || isset($_POST['gBusiness']) && !empty($_POST['gBusiness']) || isset($_POST['gCommunication']) && !empty($_POST['gCommunication']) || isset($_POST['gEducation']) && !empty($_POST['gEducation']) || isset($_POST['gEntertainment']) && !empty($_POST['gEntertainment']) || isset($_POST['gEvents']) && !empty($_POST['gEvents']) || isset($_POST['gFinance']) && !empty($_POST['gFinance']) || isset($_POST['gFood']) && !empty($_POST['gFood']) || isset($_POST['gHealth']) && !empty($_POST['gHealth']) || isset($_POST['gMusic']) && !empty($_POST['gMusic']) || isset($_POST['gNews']) && !empty($_POST['gNews']) || isset($_POST['gPhotography']) && !empty($_POST['gPhotography']) || isset($_POST['gShopping']) && !empty($_POST['gShopping']) || isset($_POST['gSocial']) && !empty($_POST['gSocial']) || isset($_POST['gTravel']) && !empty($_POST['gTravel']) || isset($_POST['gVideo']) && !empty($_POST['gVideo'])
	// 	) {
	// 	$where .= " WHERE ";
	// }

	//check price - free

	if ($appFree == 'true') {
		$where .= "appPrice = '0' AND ";
	}

	// check price - paid
	if ($_POST['pPaid'] == 'true') {
		$where .= "appPrice > '0' AND ";
	}

	// check genres - beauty
	if ($_POST['gBeauty'] == 'true') {
		$where .= "appGenres = 'Beauty' OR  "; 
		// $where .= "appGenres = '$appBeauty' OR  "; 
	}

	// check genres - Books & Reference
	if ($_POST['gBooks'] == 'true') {
		$where .= "appGenres = 'Books & Reference' OR  "; 
	}

	// check genres - Business
	if ($_POST['gBusiness'] == 'true') {
		$where .= "appGenres = 'Business' OR  "; 
	}

	// check genres - communication
	if ($_POST['gCommunication'] == 'true') {
		$where .= "appGenres = 'Communication' OR  "; 
	}

	// check genres - education
	if ($_POST['gEducation'] == 'true') {
		$where .= "appGenres = 'Education' OR  "; 
	}

	// check genres - entertainment
	if ($_POST['gEntertainment'] == 'true') {
		$where .= "appGenres = 'Entertainment' OR  "; 
	}

	// check geners - events
	if ($_POST['gEvents'] == 'true') {
		$where .= "appGenres = 'Events' OR  "; 
	}

	// check geners - finance
	if ($_POST['gFinance'] == 'true') {
		$where .= "appGenres = 'Finance' OR  "; 
	}

	// check geners - food
	if ($_POST['gFood'] == 'true') {
		$where .= "appGenres = 'Food & Drink' OR  "; 
	}

	// check geners - Health & Fitness
	if ($_POST['gHealth'] == 'true') {
		$where .= "appGenres = 'Health & Fitness' OR  "; 
	}

	// check geners - Music & Audio
	if ($_POST['gMusic'] == 'true') {
		$where .= "appGenres = 'Music & Audio' OR  "; 
	}

	// check geners - News & Magazines
	if ($_POST['gNews'] == 'true') {
		$where .= "appGenres = 'News & Magazines' OR  "; 
	}

	// check geners - Photography
	if ($_POST['gPhotography'] == 'true') {
		$where .= "appGenres = 'Photography' OR  "; 
	}

	// check geners - Shopping
	if ($_POST['gShopping'] == 'true') {
		$where .= "appGenres = 'Shopping' OR  "; 
	}

	// check geners - Social
	if ($_POST['gSocial'] == 'true') {
		$where .= "appGenres = 'Social' OR  "; 
	}

	// check geners - Travel & Local
	if ($_POST['gTravel'] == 'true') {
		$where .= "appGenres = 'Travel & Local' OR  "; 
	}

	// check geners - Video Players & Editors
	if ($_POST['gVideo'] == 'true') {
		$where .= "appGenres = 'Video Players & Editors' OR  "; 
	}

	$where = substr($where, 0, -4);

	$appQuery = $select . $where;

	$appResult = $db->query($appQuery);

	if ($appResult->num_rows > 0) {
        while($row = $appResult->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
     echo json_encode($result_array);
?>