<!DOCTYPE html>
<html>
<header>
	<link rel="shortcut icon" href="./img/leyte_seal.jpeg">
	<title>My pErSoNaL SPace</title>
	<meta charset="utf-8"/>
	<script src="./js/jquery.js"></script>
	<script src="./js/jquery-ui.js"></script>
	<script src="./js/admin.js"></script>
	<script src = "./js/jquery-ui-1.9.0.custom.min.js"></script>
	<link rel="stylesheet" href="./css/jquery-ui1.css" style="text/css" />
	<link rel="stylesheet" href="./css/admin.css" style="text/css"/>

</header>
<body>
	<?php
 	include 'class/header_user_interface.php';
	?>
	<div id="wrapper">
		<h1>TaClObAn CitY aNd lEyTe aT Its bEst</h1>		
   <ul id="tabs">
      <li><a href="#tracking_users_tab" name="tracking_users_tab"><span>TracKing Users</span></a></li>
      <li><a href="#sent_messages_tab" name="sent_messages_tab"><span>Messages</span></a></li>
      <li><a href="#manage_users_tab" name="manage_users_tab"><span>Manage Users</span></a></li>
      <li><a href="#manage_data_tab" name="manage_data_tab"><span>Manage Data</span></a></li>
      
   </ul>
		<div id="BodyContent">
		
				<div id="tracking_users_tab" class="tabContent">
                   

				</div><!--tracking_users-->
				<div id="sent_messages_tab" class="tabContent">

				</div><!--sent_messages-->

				<div id="manage_users_tab" class="tabContent">
					<input for="search_users"/><button id="search_users_btn">Search</button>

				</div><!--manage_users-->
				<div id="manage_data_tab" class="tabContent">
					<table id="manage_data_Tbl" border='1' >
					<thead>
					
					    <th scope="col">Name</th>
						<th scope="col">Location</th>
						<th scope="col">Description</th>
						<th scope="col">Classifacation</th>
						<th scope="col">Rating</th>
						<th scope="col">Public</th>
						<th scope="col">User Name</th>
										
					
					</thead>
					<tbody class='dataViewer'></tbody>
					
				</table><br/>
				</div><!--manage_data-->






			

		</div><!--BodyContent-->
		<?php
		include 'class/footer.php';
		?>
	</div><!--wrapper-->

</body>
</html>
