<?php require_once('connect.php'); ?>
<html>
<head>
<title>Login</title>
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
<form action="hotel.php" method="post">
<div>
<label for="email">Email: </label>
</div>
<div>
<input type="text" id="email" name="email">
</div>
<div>
<label for="password">Password: </label>
</div>
<div>
<input type="password" id="password" name="password">
</div>
<div>
<input type="submit" value="Login" name="login" id="login">
</div>
</form>
<div>
<a href="register.php">Register</a>
</div>
</body>
</html>