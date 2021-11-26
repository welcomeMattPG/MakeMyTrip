<!DOCTYPE html>
<html>
<head>
<title>MakeMyTrip</title>
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="table.css">
</head>

<body>

<div class="table-wrapper"> 
	<div>
		MakeMyTrip
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
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hid value=".$row['hotel_id']."><br>";
			echo "</div>";

			echo "<label>Name</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_name value=".$row['hotel_name']."><br>";
			echo "</div>";

			echo "<label>Address</label>";
			echo "<div class='form-group'>";
			echo "<textarea class='form-field' name=hotel_address>".$row['hotel_address']."</textarea><br>";
			echo "</div>";
			
			echo "<label>City</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_city value=".$row['hotel_city']."><br>";
			echo "</div>";

			echo "<label>Country</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_country value=".$row['hotel_country']."><br>";
			echo "</div>";

			echo "<label>Phone Number</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_zip value=".$row['hotel_zip']."><br>";
			echo "</div>";

			echo "<label>Email</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_phone value=".$row['hotel_phone']."><br>";
			echo "</div>";

			echo "<label>Website</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_email value=".$row['hotel_email']."><br>";
			echo "</div>";

			echo "<label>Rating</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=hotel_website value=".$row['hotel_website']."><br>";
			echo "</div>";
			
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