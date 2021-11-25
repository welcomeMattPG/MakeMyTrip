<?php require_once('connect.php'); ?> 
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
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
				if(isset($_POST['submit'])) {
					$groupcode = $_POST['groupcode'];
					$groupname = $_POST['groupname'];
					$remark = $_POST['remark'];
					$url = $_POST['url'];

					$q="INSERT INTO USERGROUP(USERGROUP_CODE,USERGROUP_NAME,USERGROUP_REMARK,USERGROUP_URL) VALUES ('$groupcode','$groupname','$remark','$url');";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
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
				 	$q="select * from Hotel";
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
                    <td><a href='edithotel.php?hid=<?=$row['hotel_id']?>'>Edit</a></td>
                    <td><a href='delhotel.php?hid=<?=$row['hotel_id']?>'>Delete</a></td>
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><td colspan=6 align=right>Total $count records</td></tr>";
					$result->free();
			?>
            </table>
            <h2>Users List</h2>			
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
                    <th>User ID</th> 
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
					<th>Phone</th>
					<th>Birthday</th>
					<th>Gender</th>
					<th>Country</th>
                </tr>
				 <?php
				 	$q="select * from User";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td><?=$row['user_id']?></td> 
                    <td><?=$row['title']?></td>
                    <td><?=$row['fname']?></td>
                    <td><?=$row['lname']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['password']?></td>
					<td><?=$row['phone_no']?></td>
					<td><?=$row['birthday']?></td>
					<td><?=$row['gender']?></td>
					<td><?=$row['country']?></td>
                    <td><a href='edituser.php?uid=<?=$row['user_id']?>'>Edit</a></td>
                    <td><a href='deluser.php?uid=<?=$row['user_id']?>'>Delete</a></td>
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><td colspan=6 align=right>Total $count records</td></tr>";
					$result->free();
			?>
            </table>
            <h2>Booking List</h2>			
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

                <tr>
                    <th>Booking ID</th> 
                    <th>User ID</th>
                    <th>Hotel ID</th>
                    <th>Adult</th>
                    <th>Children</th>
                    <th>Booking Date</th>
					<th>From</th>
					<th>To</th>
					<th>Request</th>
                </tr>
				 <?php
				 	$q="select * from Booking";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td><?=$row['booking_id']?></td> 
                    <td><?=$row['user_id']?></td>
                    <td><?=$row['hotel_id']?></td>
                    <td><?=$row['num_adult']?></td>
					<td><?=$row['num_children']?></td>
					<td><?=$row['booking_dt']?></td>
					<td><?=$row['from_date']?></td>
					<td><?=$row['to_date']?></td>
					<td><?=$row['request']?></td>
                    <td><a href='editbooking.php?bid=<?=$row['booking_id']?>'>Edit</a></td>
                    <td><a href='delbooking.php?bid=<?=$row['booking_id']?>'>Delete</a></td>
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


