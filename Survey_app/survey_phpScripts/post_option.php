<?php
   
   // Set Database information
   
   // Database host
   $host = '50.112.249.251'; 
   // Database name
   $db = 'survey_app_db'; 
   // MySQL username
   $uid = 'external_user';
   // MySQL password
   $pwd = 'jTJW7xTn8MrjDyRd';
 
	// set restaurantID to get categories for selected restaurant
 	$surveyAuthKey   = isset($_GET['surveyAuthKey']) ? $_GET['surveyAuthKey']  : "";
   $optionName = isset($_GET['optionName']) ? $_GET['optionName']  : "";
	
   echo $surveyAuthKey;
   echo $optionName;

	// Connect to the Database server   
    $link = mysql_connect($host, $uid, $pwd) or die("Could not connect");
   
   //select the Database
   mysql_select_db($db) or die("Could not select database");
   
   // Create an array to hold our results
   $arr = array();
   
   //Execute the query
     $rs = mysql_query("UPDATE Survey_Results SET Option_value = Option_value+1 
      WHERE Survey_authKey = '$surveyAuthKey' AND Option_name = '$optionName'");
   
   if ($rs) {
      echo 'Successful';
   }
   else {
      echo 'Failure';
   }


   // close connection 
   mysql_close();
?>