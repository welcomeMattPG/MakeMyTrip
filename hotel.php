<?php require_once('connect.php'); ?> 
<!DOCTYPE html>
<html>
<head>
<title>Hotels List</title>
<link rel="stylesheet" href="table.css">
</head>
<body>
<main>
<div> 
	<div>
		MakeMyTrip 
	</div>
	<div>
			<a href="register.php">Register</a>
			<a href="index.php">Login</a>
			<a href="hotel.php">Hotel List</a>
			<a href="add_review.php">Add Review</a>
			<a href="review.php">Show Review</a>
			<a href="admin.php">Admin</a>		
	</div>
	<div>
		<div class="table-wrapper">
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
				else if($_GET['uid'] != ''){
					$uid = $_GET['uid'];
				}
				else{
					echo "Please Login before booking the hotel";
					return false;
				}
			?>
			<h2>Hotels List</h2>			
			<table class="fl-table">
                <col width="12.5%">
                <col width="12.5%">
                <col width="12.5%">
                <col width="12.5%">
                <col width="12.5%">
                <col width="12.5%">
				<col width="12.5%">
				<col width="12.5%">


                <tr>
                    <th>Hotel Code</th> 
                    <th>Hotel Name</th>
                    <th>City</th>
                    <th>Country</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Website</th>
					<th>Rating</th>
                </tr>
				 <?php
				 	$q="select * from Hotel ";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td><?=$row['hotel_id']?></td> 
                    <td><?=$row['hotel_name']?></td>
                    <td><?=$row['hotel_city']?></td>
					<td><?=$row['hotel_country']?></td>
					<td><?=$row['hotel_phone']?></td>
					<td><?=$row['hotel_email']?></td>
					<td><?=$row['hotel_website']?></td>
					<td><?=$row['hotel_rating']?></td>
					<?php
					if($email!=''){
						$q2="select user_id from User where email = '$email'";
						$result2=$mysqli->query($q2);
						if(!$result2){
							echo "Select failed. Error: ".$mysqli->error ;
							return false;
						}
						$row2=$result2->fetch_array();
					?>
					<td><a href='booking.php?hid=<?=$row['hotel_id']?>&uid=<?=$row2['user_id']?>'> Booking</a></td>
					<?php
					}
					else {
					?>
						<td><a href='booking.php?hid=<?=$row['hotel_id']?>&uid=<?=$uid?>'> Booking</a></td>
					<?php
					}
					?>
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
</main>
</body>
</html>


