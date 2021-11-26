<?php require_once('connect.php'); ?>
<html>
<head>
<title>Confirm booking</title>
</head>
<body>
<?php
if(isset($_POST['book'])){ 
    $uid = $_POST['uid'];
    $hid = $_POST['hid'];
    $booking_id=$_POST['bid'];
	$num_adult = $_POST['adult'];
	$num_children = $_POST['children'];
	$booking_dt = $_POST['booking_dt'];
	$from_date = $_POST['fromdate'];
	$to_date = $_POST['todate'];
	$request = $_POST['request'];
    $q1="INSERT INTO Booking (num_adult, num_children, booking_dt, from_date, to_date, request, user_id, hotel_id) VALUES ('$num_adult', '$num_children', '$booking_dt', '$from_date', '$to_date', 
		'$request', '$uid', '$hid')";
		$result1=$mysqli->query($q1);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
			}
?>
    <div>
    <h1>Booking Confirmed</h1>
    </div>
    <a href='hotel.php?uid=<?=$uid?>'>Hotels List</a>
<?php
}
?>
</body>
</html>