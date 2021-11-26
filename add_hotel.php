<html>
<head>
<title>Add new hotel</title>
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="table.css">
</head>
<body>

<div class="table-wrapper">
<h1>MakeMyTrip</h1>
<form action="admin.php" method="post">
<div>
<label for="name">Hotel name: </label>
</div>
<div class="form-group">
<input type="text" class="form-field" id="name" name="name">
</div>
<div>
<label for="address">Hotel address: </label>
</div>
<div class="form-group">
<textarea id="address" class="form-field" name="address"></textarea>
</div>
<div>
<label for="city">City: </label>
</div>
<div class="form-group">
<input type="text" class="form-field" id="city" name="city">
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
<div class="form-group">
<input type="text" class="form-field" id="zip" name="zip">
</div>
<div>
<label for="phone">Phone number: </label>
</div>
<div class="form-group">
<input type="text" class="form-field" id="phone" name="phone">
</div>
<div>
<label for="email">email: </label>
</div>
<div class="form-group">
<input type="text" class="form-field" id="email" name="email">
</div>
<div>
<label for="website">Website: </label>
</div>
<div class="form-group">
<input type="text" class="form-field" id="website" name="website">
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
</div>
</body>
</html>