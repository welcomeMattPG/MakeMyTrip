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
	MakeMyTrip	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="form">
		<h2>Edit Booking</h2>
		<?php
		 $bid = $_GET['bid'];
		require_once('connect.php'); 
		$q="SELECT * FROM Booking where booking_id=$bid";
		 $result = $mysqli->query($q);
			echo "<form action='updatebooking.php' method='post'>";
			while($row=$result->fetch_array()){
			echo "<label>Booking ID</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=bid value=".$row['booking_id']."><br>";
			echo "</div>";
			echo "<label>Number of Adult</label>";
			echo "<select id='adult' name='adult'>";
			if($row['num_adult'] == '0'){
				echo "<option value='0' selected>0</option>";
				echo "<option value='1'>1</option>";
				echo "<option value='2'>2</option>";
				echo "<option value='3'>3</option>";
			}elseif($row['num_adult'] == '1'){
				echo "<option value='0'>0</option>";
				echo "<option value='1' selected>1</option>";
				echo "<option value='2'>2</option>";
				echo "<option value='3'>3</option>";
			}elseif($row['num_adult'] == '2'){
				echo "<option value='0'>0</option>";
				echo "<option value='1'>1</option>";
				echo "<option value='2' selected>2</option>";
				echo "<option value='3'>3</option>";
			}elseif($row['num_adult'] == '3'){
				echo "<option value='0'>0</option>";
				echo "<option value='1'>1</option>";
				echo "<option value='2'>2</option>";
				echo "<option value='3' selected>3</option>";
			}
			echo "</select><br>";
			
			echo "<label>Number of Children</label>";
			echo "<select id='children' name='children'>";
			if($row['num_children'] == '0'){
				echo "<option value='0' selected>0</option>";
				echo "<option value='1'>1</option>";
				echo "<option value='2'>2</option>";
			}elseif($row['num_children'] == '1'){
				echo "<option value='0'>0</option>";
				echo "<option value='1' selected>1</option>";
				echo "<option value='2'>2</option>";
			}elseif($row['num_children'] == '2'){
				echo "<option value='0'>0</option>";
				echo "<option value='1'>1</option>";
				echo "<option value='2' selected>2</option>";
			}
			echo "</select><br>";

			echo "<label>Booking Date</label>";
			echo "<input type=date name=booking_dt value=".$row['booking_dt']."><br>";

			echo "<label>From Date</label>";
			echo "<input type=date name=from_date value=".$row['from_date']."><br>";


			echo "<label>To Date</label>";
			echo "<input type=date name=to_date value=".$row['to_date']."><br>";

			echo "<label>Request</label>";
			echo "<div class='form-group'>";
			echo "<input type=text class='form-field' name=request value=".$row['request']."><br>";
			echo "</div>";

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