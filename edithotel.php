<!DOCTYPE html>
<html>
<head>
<title>MakeMyTrip</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
		MakeMyTrip
	</div>
	<div id="div_subhead">
	<ul id="menu">
		<li><a href="register.php">Register</a></li>
			<li><a href="index.php">Login</a></li>
			<li><a href="hotel.php">Hotel List</a></li>
			<li><a href="add_review.php">Add Review</a></li>
			<li><a href="review.html">Show Review</a></li>
			<li><a href="aadmin">Admin</a></li>

		</ul>	
	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="form">
		<h2>Edit Hotel</h2>
		<?php
		 $hid = $_GET['hid'];
		require_once('connect.php'); 
		$q="SELECT * FROM Hotel where hotel_id=$hid";
		 $result = $mysqli->query($q);
			echo "<form action='updatehotel.php' method='post'>";
			while($row=$result->fetch_array()){
			echo "<label>Hotel ID/label>";
			echo "<input type=text name=hid value=".$row['hotel_id']."><br>";
			
			echo "<label>Name</label>";
			echo "<input type=text name=hotel_name value=".$row['hotel_name']."><br>";
			
			echo "<label>Address</label>";
			echo "<textarea name=hotel_address>".$row['hotel_address']."</textarea><br>";
			
			echo "<label>City</label>";
			echo "<input type=text name=hotel_city value=".$row['hotel_city']."><br>";

			echo "<label>Country</label>";
			echo "<input type=text name=hotel_country value=".$row['hotel_country']."><br>";

			echo "<label>Phone Number</label>";
			echo "<input type=text name=hotel_zip value=".$row['hotel_zip']."><br>";

			echo "<label>Email</label>";
			echo "<input type=text name=hotel_phone value=".$row['hotel_phone']."><br>";

			echo "<label>Website</label>";
			echo "<input type=text name=hotel_email value=".$row['hotel_email']."><br>";

			echo "<label>Rating</label>";
			echo "<input type=text name=hotel_website value=".$row['hotel_website']."><br>";

			echo "<label>Rating</label>";
			echo "<select name='rating' id='rating'>";
			echo "<option value='1'>1</option>";
			echo "<option value='2'>2</option>";
			echo "<option value='3'>3</option>";
			echo "<option value='4'>4</option>";
			echo "<option value='5'>5</option>";

			echo "</select>";
		
			echo "<div class='center'>";			
			echo "<input type=submit name=su value=submit>";
			echo "<input type='reset' value='Cancel'>	";
			echo "</div>";
			}
			echo "</form>";
			
		?>
			
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>