<html>
<head>
<title>Register</title>
</head>
<body>
<h1>MakeMyTrip</h1>
<form action="index.php" method="post">
<div>
<label for="title">title</label>
</div>
<div>
<select id="title" name="title">
<option value="Mr">Mr</option>
<option value="Ms">Ms</option>
<option value="Mrs">Mrs</option>
<option value="-">-</option>
</select>
</div>
<div>
<label for="firstname">First name: </label>
</div>
<div>
<input type="text" id="firstname" name="firstname">
</div>
<div>
<label for="lastname">Last name: </label>
</div>
<div>
<input type="text" id="lastname" name="lastname">
</div>
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
<label for="phone">Phone no: </label>
</div>
<div>
<input type="text" id="phone" name="phone">
</div>
<div>
<label for="birthday">Birthday: </label>
</div>
<div>
<input type="date" id="birthday" name="birthday">
</div>
<div>
<label for="gender">Gender: </label>
</div>
<div>
<select id="gender" name="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="-">-</option>
</select>
</div>
<div>
<label for="country">Country: </label>
</div>
<div>
<?php require_once('country.php'); ?>
</div>
<div>
<input type="submit" id="register" name="register" value="Register now">
</div>
</form>
</body>
</html>