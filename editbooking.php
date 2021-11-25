<!DOCTYPE html>
<html>
<head>
<title>MakeMyTrip</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
	MakeMyTrip	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="user.php">Register</a></li>
			<li><a href="add_user.php">Login</a></li>
			<li><a href="group.php">Hotel List</a></li>
			<li><a href="add_group.html">Add Review</a></li>
			<li><a href="add_group.html">Show Review</a></li>
			<li><a href="add_group.html">Admin</a></li>
		</ul>		
	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="form">
		<h2>Edit Booking</h2>
		<?php
		 $uid = $_GET['uid'];
		require_once('connect.php'); 
		$q="SELECT * FROM Booking where booking_id=$uid";
		 $result = $mysqli->query($q);
			echo "<form action='updatebooking.php' method='post'>";
			while($row=$result->fetch_array()){
			echo "<label>Booking ID</label>";
			echo "<input type=text name=booking_id value=".$row['booking_id']."><br>";
			
			echo "<label>Num Adult</label>";
			echo "<input type=text name=new_adult value=".$row['new_adult']."><br>";
			
			echo "<label>Num Children</label>";
			echo "<textarea name=remark>".$row['USERGROUP_REMARK']."</textarea><br>";
			echo "<input type=hidden name=new_children value='".$row['new_children']."'><br>";
			
			echo "<label>Booking Date&Time</label>";
			echo "<input type=text name=booking_dt value=".$row['booking_dt']."><br>";

			echo "<label>From Date</label>";
			echo "<input type=text name=from_date value=".$row['from_date']."><br>";

			echo "<label>To Date</label>";
			echo "<input type=text name=to_date value=".$row['to_date']."><br>";

			echo "<label>Request</label>";
			echo "<input type=text name=request value=".$row['request']."><br>";

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