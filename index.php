<?php require_once('connect.php'); ?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="table.css">

</head>
<body>
<?php
if(isset($_POST['register'])){
$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$country = $_POST['country'];
					$q="INSERT INTO User (title, fname, lname, email, password, phone_no, birthday, gender, country)
					VALUES ('$title', '$firstname', '$lastname', '$email', '$password', '$phone', '$birthday', '$gender', '$country')";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error;
						return false;
					}
}
?>
<h1>MakeMyTrip</h1>
<h2>Login</h2>
<div class="table-wrapper">
<form action="hotel.php" method="post">
<div class="form-group">
<input type="email" class="form-field" placeholder="Email" id="email" name="email" required/>
</div>
<div class="form-group">
<input type="password" class="form-field" placeholder="Password" id="password" name="password" required/>
</div>
<div>
<input type="submit" value="Login" name="login" id="login">
</div>
</form>
<div>
<a href="register.php">Register</a>
</div>
</div>
</body>
</html>