<?php
require_once('connect.php'); 
	if(isset($_POST['su'])) {
		$usid=$_POST['usid'];
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
		$usergroup = $_POST['usergroup'];
		$disabled = $_POST['disabled'];

		$q1="UPDATE USER SET USER_ID= '$userid', USER_TITLE = '$title', USER_FNAME = '$fname', 
		USER_LNAME = '$lname', USER_GENDER = '$gender', USER_EMAIL = '$email', USER_NAME = '$username', USER_PASSWD = '$passwd' , USER_GROUPID = '$usergroup', DISABLE = '$disabled' where USER_ID = '$usid'";
		$result1=$mysqli->query($q1);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
		}
		header("Location: user.php");
	}
?>