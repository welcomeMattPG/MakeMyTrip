<?php
require_once('connect.php'); 
	if(isset($_POST['su'])) {
		$uid=$_POST['uid'];
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$passwd = $_POST['passwd'];
		$phone_no = $_POST['phone'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];

		$q1="UPDATE User SET user_id= '$userid', title = '$title',fname = '$fname', 
		lname = '$lname', email = '$email', passwd = '$password' , phone = '$phone_no', gender = '$gender',country = '$country' where user_id = '$uid'";
		$result1=$mysqli->query($q1);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
		}
		header("Location: user.php");
	}
?>