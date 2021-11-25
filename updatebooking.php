<?php
require_once('connect.php'); 
	if(isset($_POST['su'])) {
		$booking_id=$_POST['bid'];
		$num_adult = $_POST['num_adult'];
		$num_children = $_POST['num_children'];
		$booking_dt = $_POST['booking_dt'];
		$from_date = $_POST['from_date'];
		$to_date = $_POST['to_date'];
		$request = $_POST['request'];


		$q1="UPDATE Booking SET booking_id= '$groupid',num_adult= '$num_adult',num_children= '$num_children',booking_dt= '$booking_dt', from_date = '$from_date', to_date = '$to_date', 
		request = '$request' where booking_id = '$booking_id'";
		$result1=$mysqli->query($q1);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: booking.php");
	}
?>