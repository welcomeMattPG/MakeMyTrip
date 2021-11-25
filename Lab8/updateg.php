<?php
require_once('connect.php'); 
	if(isset($_POST['su'])) {
		$groupid=$_POST['uid'];
		$groupcode = $_POST['groupcode'];
		$groupname = $_POST['groupname'];
		$remark = $_POST['remark'];
		$url = $_POST['groupurl'];

		$q1="UPDATE USERGROUP SET USERGROUP_ID= '$groupid', USERGROUP_CODE = '$groupcode', USERGROUP_NAME = '$groupname', 
		USERGROUP_REMARK = '$remark', USERGROUP_URL = '$url' where USERGROUP_ID = '$groupid'";
		$result1=$mysqli->query($q1);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: group.php");
	}
?>