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
		<h2>Edit User </h2>
		<?php
			$uid = $_GET['uid'];
			require_once('connect.php'); 
			$q="SELECT * FROM User where user_id =$uid";
		 	$result = $mysqli->query($q);
			 $row=$result->fetch_array();
			 echo "<form action='updateuser.php' method='post'>";
			 echo "<label>Title</label>";
			 echo "<select name='title' id='title'>";
			 echo "<option value='Mr.'>Mr</option>";
			 echo "<option value='Ms.'>Ms</option>";
			 echo "<option value='Mrs.'>Mrs</option>";
			 echo "<option value='-'>-</option>";			 
			 echo "</select>";

			echo "<div class='form-group'>";
			echo "<label>First Name</label>";
			echo "</div>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=fname value=".$row['fname']."><br>";
			echo "</div>";

			echo "<label>Last Name</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=lname value=".$row['lname']."><br>";
			echo "</div>";

			echo "<label>Email</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=email value=".$row['email']."><br>";
			echo "</div>";

			echo "<label>Password</label>";
			echo "<div class='form-group'>";
			echo "<input type=password class='form-field' name=passwd value=".$row['password']."><br>";
			echo "</div>";

			echo "<label>Phone Number</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=phone value=".$row['phone_no']."><br>";
			echo "</div>";

			echo "<label>Birthday</label>";
			echo "<input type=date name=birthday value=".$row['birthday']."><br>";

			echo "<label>Gender</label>";
			echo "<select name='gender' id='gender'>";
			echo "<option value='Male'>Male</option>";
			echo "<option value='Female'>Female</option>";
			echo "<option value='Other'>Other</option>";
			echo "</select>";
			echo "<div></div>";

			echo "<label for='country'>Country: </label>";
			echo "</div>";
			echo "<div>";
			require_once('country.php');
			echo "</div>";
			echo "<div>";

			echo "<input type=hidden name=uid value=".$row['user_id']."><br>";
			
			echo "<div class='center'>";			
			echo "<input type=submit name=su value=submit>";
			echo "<input type='reset' value='Cancel'>	";
			echo "</div>";
			echo "</form>";
			
		?>
			
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>