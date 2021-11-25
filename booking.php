<?php require_once('connect.php'); ?>
<html>
<head>
<title>Book hotel</title>
</head>
<body>
<h1>MakeMyTrip</h1>
<h2>Book hotel</h2>
<form action="confirm_book.php" method="post">
<div>
<label for="adult">Number of adult: </label>
</div>
<div>
<select id="adult" name="adult">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
<div>
label for="children">Number of children</label>
</div>
<div>
<select id="children" name="children">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
</div>
<div>
<label for="fromdate">From date: </label>
</div>
<div>
<input type="date" id="fromdate" name="fromdate">
</div>
<div>
<label for="todate">To date: </label>
</div>
<div>
<input type="date" id="todate" name="todate">
</div>
<div>
<input type="submit" value="Book new" id="book" name="book">
</div>
</form>
</body>
</html>