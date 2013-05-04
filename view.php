<?php
   session_start();

  include "DAO/FunctionDAO.php";
	
    $username=$_SESSION['username'];
	$action = new FunctionDAO();
	
	$action -> view($username);

?>
