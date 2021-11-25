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
			<li><a href="add_review.html">Add Review</a></li>
			<li><a href="review.html">Show Review</a></li>
			<li><a href="aadmin">Admin</a></li>

		</ul>		
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
		 
			echo "<label>First Name</label>";
			echo "<input type=text name=fname value=".$row['fname']."><br>";
			
			echo "<label>Last Name</label>";
			echo "<input type=text name=lname value=".$row['lname']."><br>";
			
			echo "<label>Email</label>";
			echo "<input type=text name=email value=".$row['email']."><br>";

			echo "<label>Password</label>";
			echo "<input type=password name=passwd value=".$row['password']."><br>";

			echo "<label>Phone Number</label>";
			echo "<input type=text name=phone value=".$row['phone_no']."><br>";

			echo "<label>Birthday</label>";
			echo "<input type=date name=birthday value=".$row['birthday']."><br>";

			echo "<label>Gender</label>";
			echo "<select name='gender' id='gender'>";
			echo "<option value='Male'>Male</option>";
			echo "<option value='Female'>Female</option>";
			echo "<option value='Other'>Other</option>";
			echo "</select>";
			echo "<div></div>";

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