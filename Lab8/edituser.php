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
		<h2>Edit User Profile</h2>
		<?php
		 $usid = $_GET['usid'];
		require_once('connect.php'); 
		$q="SELECT * FROM USER where USER_ID=$usid";
		$result = $mysqli->query($q);
			echo "<form action='updateuser.php' method='post'>";
			echo "<label>Title</label>";
			echo "<select name=title>";
			while($row=$result->fetch_array()){
		$q1="select TITLE_ID,TITLE_NAME from TITLE";
		if($result1=$mysqli->query($q1)){
			while($row1=$result1->fetch_array()){
				echo "<option value= $row1[0] ";
				if ($row1[0] == $row['USER_TITLE'])
					echo "SELECTED";
					echo "> $row1[1] </option>";
			}
		}else{
			echo 'Query error: '.$mysqli->error;
		}
			echo "</select>";
			
			echo "<label>First Name</label>";
			echo "<input type=text name=fname value=".$row['USER_FNAME']."><br>";
			
			echo "<label>Last Name</label>";
			echo "<input type=text name=lname value=".$row['USER_LNAME']."><br>";
			
			echo "<label>Gender</label>";
			$q2='select GENDER_ID, GENDER_NAME from GENDER;';
			if($result2=$mysqli->query($q2)){
				while($row2=$result2->fetch_array()){
				echo "<input ";
				if ($row2[0] == $row['USER_GENDER'])
					echo "CHECKED='CHECKED'";
					echo "type='radio' name='gender' value='$row2[0]' >".$row2[1];
				}
				}else{
					echo 'Query error: '.$mysqli->error;
				}
			
			echo "<div></div>";
			
			echo "<label>Email</label>";
			echo "<input type=text name=email value=".$row['USER_EMAIL']."><br>";
			
			echo "<h2> Account Profile</h2>";
			
			echo "<label>Username</label>";
			echo "<input type=text name=username value=".$row['USER_NAME']."><br>";
			
			echo "<label>Password</label>";
			echo "<input type=password name=passwd value=".$row['USER_PASSWD']."><br>";
			
			echo "<label>Confirmed password</label>";
			echo "<input type=password name=cpasswd ><br>";
			
			echo "<label>User Group</label>";
			echo "<select name=usergroup value=".$row['USER_GROUPID'].">";
			$q3='select USERGROUP_ID, USERGROUP_NAME from USERGROUP;';
			if($result3=$mysqli->query($q3)){
				while($row3=$result3->fetch_array()){
					echo "<option value= $row3[0] ";
					if ($row3[0] == $row['USER_GROUPID'])
						echo "SELECTED";
						echo "> $row3[1] </option>";
				}
			}else{
				echo 'Query error: '.$mysqli->error;
			}
			echo "</select>";
			
			echo "<label>Disabled</label>";
			echo "<input type='checkbox' name='disabled' value='1' ";
			if($row['DISABLE']==1)
				echo "checked";
			echo ">";
			echo "<input type='hidden' name='page' value='adduser' >";
			
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