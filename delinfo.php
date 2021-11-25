<?php
$uid = $_GET['uid'];
$hid = $_GET['hid'];
$bid = $_GET['bid'];
require_once('connect.php');
if (isset($uid)){
$q="DELETE FROM User where user_id=$uid";
if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
}
$mysqli->close();
header("Location: admin.php");
}
else if (isset($hid)){
$q="DELETE FROM Hotel where hotel_id=$uid";
if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
}
$mysqli->close();
header("Location: admin.php");
}
else if (isset($bid)){
$q="DELETE FROM Booking where booking_id=$uid";
if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
}
$mysqli->close();
header("Location: admin.php");
}
?>