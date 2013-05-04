<?php
session_start();
include 'DAO/FunctionDAO.php';
  $username = $_SESSION['username'];
	$places_id = $_POST['places_id'];
	$place_name = $_POST['place_name'];
	$place_location = $_POST['place_location'];
	$place_description = $_POST['place_description'];
	$place_classification = $_POST['place_classification'];
		
		if ($place_name != "" && $place_location != "" && $place_description != "" && $place_classification != "" && $username!=""){
			$action = new FunctionDAO();
			$action -> add_places($places_id, $place_name,$place_location,$place_description,$place_classification,$username);	
			
		}else{
			echo "f";
	
		};
		
	
?>
