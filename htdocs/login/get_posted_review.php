<?php
	

	
	include "mysqlconnect.php";
	include "redirect.php";
	$loc_attributes = array("Neighborhood:","Roads:", "Safety:", "Cleanliness:", "Public:", "Parking:",
			 "Connectivity:", "Traffic:", "Schools:", "Restaurants:", "Hospital:", "Market:", "Net:", "Review:");

	//$q="SELECT `neighborhood`, `roads`, `safety`, `cleanliness`, `public Transport`, `parking`,
	//		 `connectivity`, `traffic`, `schools`, `restaurants`, `hospital`, `market`, `net`, `loc_id` FROM `loc_view`";
	
	//$att = mysql_array($q);
	//$city = $_POST[$loc_attributes[0]];
//	$locality = $_POST[$loc_attributes[1]];
	$q = "SELECT * FROM `loc_view` where city = 'Bangalore' and locality = 'Marathahalli' ";
	$query = mysql_query($q);
	$array = mysql_fetch_array($query);
	$user_count = $array['user_count'];
	$user_data = array();
	foreach ($loc_attributes as $value) {
		if ($value == 'Loc_id:') {
			break;
		}
		array_push($user_data, $array[2]*$user_count + $_POST[$value]);
	}
	print_r($user_data);

	$q1 = "UPDATE `loc_view` SET neighborhood = '$user_data[0]'
	,roads = '$user_data[1]'
	,safety = '$user_data[2]'
	,cleanliness = '$user_data[3]'
	,public Transport = '$user_data[4]]'
	,parking = '$user_data[5]'
	,connectivity = '$user_data[6]'
	,traffic = '$user_data[7]'
	,schools = '$user_data[8]'
	,restaurants = '$user_data[9]'
	,hospital = '$user_data[10]'
	,market = '$$user_data[11]'
	,net = '$user_data[12]' where city = 'Bangalore' and locality ='Marathahalli' ";














	mysql_query($q1);

	foreach($loc_attributes as $l)
	{
		//if (isset($_POST[$l])) 
		//{
			//$r = $_POST['neighborhood'];
			//echo "$r";
			//echo $l;
			echo $_POST[$l];
			//array_push($att, $_POST[$l]);
		//}
		#setcookie('login', $_POST['login']);
	}
	//foreach($array as $a)
	//{
		//if (isset($_POST[$l])) 
		//{
			//$r = $_POST['neighborhood'];
			//echo "$r";
			//echo $l;
			//echo $_POST[$l];
	//		echo $a;
			//array_push($att, $_POST[$l]);
		//}
		#setcookie('login', $_POST['login']);
	//}
	//$q="Insert into ";
	

?>
