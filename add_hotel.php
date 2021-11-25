<html>
<head>
<title>Add new hotel</title>
</head>
<body>
<h1>MakeMyTrip</h1>
<form action="admin.php" method="post">
<div>
<label for="name">Hotel name: </label>
</div>
<div>
<input type="text" id="name" name="name">
</div>
<div>
<label for="address">Hotel address: </label>
</div>
<div>
<textarea id="address" name="address"></textarea>
</div>
<div>
<label for="city">City: </label>
</div>
<div>
<input type="text" id="city" name="city">
</div>
<div>
<label for="country">Country: </label>
</div>
<div>
<?php require_once('country.php'); ?>
</div>
<div>
<label for="zip">Zip code: </label>
</div>
<div>
<input type="text" id="zip" name="zip">
</div>
<div>
<label for="phone">Phone number: </label>
</div>
<div>
<input type="text" id="phone" name="phone">
</div>
<div>
<label for="email">email: </label>
</div>
<div>
<input type="text" id="email" name="email">
</div>
<div>
<label for="website">Website: </label>
</div>
<div>
<input type="text" id="website" name="website">
</div>
<div>
<label for="rating">Rating: </label>
</div>
<div>
<select id="rating" name="rating">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
<div>
<input type="submit" value="Add new hotel" id="add_hotel" name="add_hotel">
</div>
</form>
</body>
</html>