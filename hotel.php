<?php require_once('connect.php'); ?> 
<!DOCTYPE html>
<html>
<head>
<title>Hotels List</title>
</head>
<body>
<div> 
	<div>
		Makemytrip 
	</div>
	<div>
			<a href="register.html">Register</a>
			<a href="index.php">Login</a>
			<a href="hotel.php">Hotel List</a>
			<a href="add_review.html">Add Review</a>
			<a href="review.php">Show Review</a>
			<a href="admin.php">Admin</a>		
	</div>
	<div>
		<div>
			<!--%%%%% Main block %%%%-->
			<?php 
				if(isset($_POST['login'])) {
					$email = $_POST['email'];
					$password = $_POST['password'];

					$q="select password from User where email = '$email'";
					$result=$mysqli->query($q);
                    $row = $result->fetch_array();
					if(!$result){
						echo "SELECT failed. Error: ".$mysqli->error ;
						return false;
					}
                    elseif(empty($row)){
                        echo "Email does not exist.";
                        return false;
                    }
                    else{
                        if($password != $row['password']){
                            echo "Password is incorrect.";
                            return false;
                        }
                    }
				}
			?>
			<h2>Hotels List</h2>			
			<table>
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">

                <tr>
                    <th>Hotel Code</th> 
                    <th>Hotel Name</th>
                    <th>Hotel Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Zipcode</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Website</th>
					<th>Rating</th>
                </tr>
				 <?php
				 	$q="select h.*, u.user_id from Hotel as h, User as u";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td><?=$row['hotel_id']?></td> 
                    <td><?=$row['hotel_name']?></td>
                    <td><?=$row['hotel_address']?></td>
                    <td><?=$row['hotel_city']?></td>
					<td><?=$row['hotel_country']?></td>
					<td><?=$row['hotel_zip']?></td>
					<td><?=$row['hotel_phone']?></td>
					<td><?=$row['hotel_email']?></td>
					<td><?=$row['hotel_website']?></td>
					<td><?=$row['hotel_rating']?></td>
                    <td><a href='booking.php?hid=<?=$row['hotel_id']?>&uid=<?=$row['user_id']?>'> Booking</a></td>
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><td colspan=6 align=right>Total $count records</td></tr>";
					$result->free();
			?>
            </table>	
				
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->

</div>
</body>
</html>


