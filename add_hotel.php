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
<select id="country" name="country">
<?php require_once('country.php'); ?>
</select>
</div>
<div>
<label for="zip">Zip code: </label>
</div>
<div>
<input type="text" id="zip" name="zip">
</div>
<div>
<input type="submit" value="Add new hotel" id="add_hotel" name="add_hotel">
</div>
</form>
<script src="country.js"</script>
</body>
</html>