<!DOCTYPE html>
<html>
<head>
<title>CSS326 Sample</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
		CSS326 System 
	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="user.php">User Profile</a></li>
			<li><a href="add_user.php">Add User</a></li>
			<li><a href="group.php">User Group</a></li>
			<li><a href="add_group.html">Add User Group</a></li>
		</ul>		
	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="form">
		<h2>Edit User Group</h2>
		<?php
		 $uid = $_GET['uid'];
		require_once('connect.php'); 
		$q="SELECT * FROM USERGROUP where USERGROUP_ID=$uid";
		 $result = $mysqli->query($q);
			echo "<form action='updateg.php' method='post'>";
			while($row=$result->fetch_array()){
			echo "<label>Group Code</label>";
			echo "<input type=text name=groupcode value=".$row['USERGROUP_CODE']."><br>";
			
			echo "<label>Group Name</label>";
			echo "<input type=text name=groupname value=".$row['USERGROUP_NAME']."><br>";
			
			echo "<label>Remark</label>";
			echo "<textarea name=remark>".$row['USERGROUP_REMARK']."</textarea><br>";
			echo "<input type=hidden name=uid value='".$row['USERGROUP_ID']."'><br>";
			
			echo "<label>Url</label>";
			echo "<input type=text name=groupurl value=".$row['USERGROUP_URL']."><br>";
			echo "<div class='center'>";			
			echo "<input type=submit name=su value=submit>";
			echo "<input type='reset' value='Cancel'>	";
			echo "</div>";
			}
			echo "</form>";
			
		?>
			
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>