<?php
  session_start();
	include 'DAO/FunctionDAO.php';	

	if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
		$LogIn = new FUNCTIONDAO();
		$verrified = $LogIn->LogInUser($_REQUEST['username'],$_REQUEST['password']);		
		if($verrified){
			$_SESSION['username']=$_REQUEST['username'];
			header('Location: user_interface.php');			
		}else{
			$errMsg = "Unknown User!";
		
			
			
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="./img/leyte_seal.jpeg">
<title>TaClObAn CitY aNd lEyTe aT Its bEst</title>
<meta charset="utf-8"/>
<script src="./js/jquery.js"></script>
<script src="./js/jquery-ui.js"></script>
<script src="./js/index.js"></script>
<script src = "./js/jquery-ui-1.9.0.custom.min.js"></script>
<link rel="stylesheet" href="./css/jquery-ui1.css" style="text/css" />
<link rel="stylesheet" href="./css/index.css" style="text/css"/>
</head>
<body>

<?php
 include 'class/header.php';
?>

<div class="wrapper">
<div class="menu_tabs" id="menu_tabs">
<div class="tabs" id="tabs">
   <ul>
      <li class="home"><a href="#home"><span>Home</span></a></li>
      <li class="hang_outs_tab"><a href="#about_us_tab"><span>About Us</span></a></li>
      <li class="adventure_tab"><a href="#mission_tab"><span>Mission</span></a></li>
      <li class="events_tab"><a href="#charity_tab"><span>Charity </span></a></li>
      <li class="foods_tab"><a href="#events_tab"><span>Events</a></span></li>
   </ul>
</div><!--tabs-->
   </div><!--menu_tabs-->
   <div class='BodyContent'>
   
			<fieldset class='BodyContent_field'>
				<h1>Tacloban And Leyte At Its Best</h1>
				<div id="home" class="tabContent">
				<p>
				<img src="./img/tacloban.jpg">  
				<p id="introduction">
				  <strong>The City of Tacloban</strong></b>(Waray: Syudad han Tacloban, Tagalog or Filipino: Lungsod ng Tacloban) is located approximately 360 miles (580 km) southeast of Manila. It is the first city in Eastern Visayas to be classified as "highly urbanized." It is the former capital of the Philippine province of Leyte, and is the largest city in terms of population[4] in Eastern Visayas. It is also the regional center of the Region VIII. Tacloban was briefly the seat of the Philippine Commonwealth Government, from 20 October 1944 to 27 February 1945.<br />

In an extensive survey conducted by the Asian Institute of Management Policy Center and released in July 2010, Tacloban City was ranked among the top ten most competitive cities in the Philippines. Tacloban ranked fifth overall, and second in the emerging cities category.
        <h3>History</h3>

   <p>Tacloban was first known as Kankabatok, an allusion to the first inhabitants of the place – Kabatok. They established their dwelling in the vicinity of the present day Sto. Niño Church. Others who came later were Gumoda, Haraging and Huraw who erected their own settlements in nearby sites. Huraw’s domain is the hill where the city hall now sits. The combined settlements acquired the name Kankabatok, meaning Kabatok’s property.

By the end of the 16th century, Kankabatok was under the political administration of Palo and part of the parish of Basey, Samar. It was discovered in 1770, by the Augustinian Mission, who were superseded by the Franciscans in 1813. During this period, Kankabatok was renamed to Tacloban.</p>

				</p>
				<a href="history/page2.php"><img src="./img/Button-Next-icon.png" id="next"></a>
				</p>
				</div>
				  <div id="about_us_tab" class="tabContent">
				  <p>
				  please call us------
				</p>
				  </div><!--Hang_outs_tab-->
				  
				  
				  <div id="mission_tab" class="tabContent">
				  <p>
				  Our Mission is to <strong>Widely Spread</strong>tourism here in our region on which could couse more job oppourtunities 
				   considering that Leyte is a province,		
				  	</p>
					</div><!--adventure-->
					
					
				   <div id="charity_tab" class="tabContent">
				   <p>
				    
				    </p>
					<div><!--events-->
					
					
					<div id="event_tab" class="tabContent">
					<p>
						<!--<a href="http://cooltext.com"><img src="http://images.cooltext.com/3070061.png" width="179" height="101" alt="Killer" /></a>
<br />Image by <a href="http://cooltext.com">Cool Text: Free Logos and Buttons</a> - <a href="http://cooltext.com/Logo-Design?LogoID=828572896">Create An Image Just Like This</a>-->
						 					</p>
					</div><!--foods-->
					

				
			</fieldset><!--BodyContent_field-->
			<?php 
			include 'class/footer.php';
				?>
			<div><!--BodyContent-->

<div id='log_in_div' title='Log-In Form'>
		<p class='status'>
			<?php 
				if(isset($errMsg)){
					echo $errMsg;
				}
			?>
		</p>
			<div class='log-in_Cont'>
				<form action='index.php' method='POST'>
					<p>			
						<label for='username'>Username:</label>
						<input type='text' id='username' name='username' />
					</p>
					<p>
						<label for='password'>Password:</label>
						<input type='password' id='password' name='password' />
					</p>
						<input type='submit' value='Log-In'/>
				</form>
				
			</div>
<div id="register_div" title='ReGisTrAtIoN FoRm'>
	<fieldset>
		<legend>ReGisTrAtIoN FoRm</legend>
		<form id="registration_form">

		<p>Name:<input type="text" name="firstname" id="firstname"/></p>
		<p>Last Name:<input type="text" name="lastname" id="lastname"/></p>
	 	<p>Address:<input type="text" name="address" id="address"/></p>
		<p>Contact Info:<input type="text" name="contact_info" id="contact_info"/></p>
		<p>Email:<input type="text" name="email" id="email"></p>
		<p>Username:<input type="text" name="register_username" id="username"/></p>
		<p>Password:<input type="password" name="register_password" id="password"/></p>
		<p>ReType-Password:<input type="password" name="retype-password" id="retype-password"/>
			<p id ="password_mismatched">Password didn't matched! Please try again.</p>
			<p id ="invalid_information">Please check and fill up the required information. Thank you!</p>
			<br />
			<br />
			<button type="submit" value="submit" id="submit_button">Submit</button>
		</form>

</div><!--register_div-->
<div id = "registration_finished" title = "CONFIRMATION">Congratulations! You're already registered to YOUR My Phone Book Application;. You may now log in as <span id = "registered_user_span"></span>.
</div><!--registration_finished-->
   
</body>
</html>
