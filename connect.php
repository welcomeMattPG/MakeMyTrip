<?php
$mysqli = new mysqli('localhost','makemytrip','css326','CSS326_project');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>