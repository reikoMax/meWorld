<?php
  session_start();
	 

	if(!isset($_SESSION['username'])){
	 header('Location: index.php');
	 
	}else{
		$username = $_SESSION['username'];
	} 
?>
<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="./img/leyte_seal.jpeg">
 	<title>TaClObAn CitY aNd lEyTe aT Its bEst</title>
	<script src="./js/jquery.js"></script>
	<script src="./js/jquery-ui.js"></script>
	<script src="./js/index.js"></script>
	<script src="./js/user_interface.js"></script>
	<script src = "./js/jquery-ui-1.9.0.custom.min.js"></script>
	<link rel="stylesheet" href="./css/jquery-ui1.css" style="text/css"/>
	<link rel="stylsheet" href"./css/index.css"style="text/css" />
	<link rel="stylesheet" href="./css/index.css" style="text/css">
	<link rel="stylesheet" href="./css/user_interface.css" style="text/css" />
</head>
<body>
	<?php
 	include 'class/header_user_interface.php';
	?>

	<h1>Welcome  <span id ="username"><?php if(isset($username)){ echo $username; }?></span>.<h1>
<div id="wrapper">
		<div class="tabs" id="tabs">
   			<ul>
      			<li class="home"><a href="#home">Home</a></li>
      			<li class="data"><a href="#data">ADD</a></li>
      			<li class="list"><a href="#list">List</a></li>
      			<li class="search"><a href="#search">Search</a></li>
     
   			</ul>
   	</div><!--tabs-->
   	<div class="BodyContent">
   		<fieldset class="BodyContent_field" id="BodyContent_field">
   			<h2>TaClObAn CitY aNd lEyTe aT Its bEst</h2>
   	<div id="tabContents">
   		<div id="home" class="tabContent">
   			<p>
   				<h5>Thank you For Using These Proggramme!</h5>
   		    
   			</p>
   			</div><!--home-->
    <div id="data" class="tabContent">
    	<fieldset name="add" title="ADD PLACES">
    		<legend>Add Places</legend>
    	<form id="add_places" name="data">
					<p>			
						<label for='place_name'>Place Name:</label>
						<input type='text' id='place_name' name='place_name' />
					</p>
					<p>
						<label for='location'>Location:</label>
						<input type='text' id='place_location' name='place_location' />
					</p>
					<p>			
						<label for='place_description'>Place Description:</label>
						<input type='text' id='place_description' name='place_description' />
					</p>
					<p>			
						<label for='place_classification'>Place Classification:</label>
						<input type='text' id='place_classification' name='place_classification' />
					</p>
					<input type="hidden" name="places_id"/>
					
						<button type='submit' value='submit' id="btn_submit">Submit</button>
    	 </form>
    	</fieldset>
    <div id="alert_confirmation">
					<p>			
						<label for='fave_rating'>Rating:</label>
						<input type='radio' id='rating1' name='1' value="1" />1
						<input type='radio' id='rating2' name='2'  value="2"/>2
						<input type='radio' id='rating3' name='3'  value="3"/>3
						<input type='radio' id='rating4' name='4'  value="4"/>4
						<input type='radio' id='rating5' name='5'  value="5"/>5
					</p>
					<p>
					<label for="publicity">do you want this to put in public view?<br />		
						<input type='checkbox' id='public' name='public' value="yes" />yes
						<input type='checkbox' id='private' name='private' value="no" />no<br />
					</p>
					<button type="submit" value="submit" id="btn_confirmation">Submit</button>
				</div><!--alert_confirmation-->
					
					
    </div><!--data-->
   
    <div id="list" class="tabContent">
				  <p>
				      <table id="listTbl" border='1' >
					<thead>
					
					    <th scope="col">Name Of Place</th>
						<th scope="col">Location</th>
						<th scope="col">Description</th>
						<th scope="col">Classifacation</th>
						<th scope="col">Rating</th>
						<th scope="col">public</th>
										
					
					</thead>
					<tbody class='listViewer'></tbody>
					
				</table><br/>
				</p>
	</div><!--list-->
	<div id="search" class="tabContent">
				  	<p>
				  	<label for='search_name'>Search Name:</label>
						<input type='text' id='search_name' name='search_name' />
					</p>
					<button id="search_btn">Search</button>
				  	<p>
				  		 <table id="listTbl" border='1' >
					<!--<thead>-->
						<th>Name</th>
						<th>Location</th>
						<th>Description</th>
						<th>Classifacation</th>
						<th>Rating</th>
						<th>Public</th>
					<!--</thead>-->
					<tbody class='listViewer'></tbody>
					
				</table><br/>

				  	</p>
	</div><!--search-->
      
  </fieldset><!--BodyContent_field-->
    </div><!--tabContent-->
   </div><!--BodyContent-->
   	<?php
   		include 'class/footer.php';
  	 ?>
</div><!--wrapper-->

</body>
</html>
