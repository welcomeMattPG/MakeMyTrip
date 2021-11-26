<?php require_once('connect.php');?>
<html>
<head>
<title>Add new review</title>
</head>
<body>
<h1>MakeMyTrip</h1>
<form action="review.php" method="post">
<div>
<label for="name">Name: </label>
</div>
<div>
<input type="text" id="name" name="name">
</div>
<div>
<?php
    $q="SELECT hotel_name FROM Hotel";
    $result=$mysqli->query($q);
    if(!$result){
        echo "SELECT failed. Error: ".$mysqli->error ;
        return false;
    }
    echo "<div>";
    echo "<label for='hotel_name'>Hotel Name: </label>";
    echo "</div>";
    echo "<select id='hotel_name' name='hotel_name'>";
    while($row=$result->fetch_array()){
        echo "<option value='$row[0]'>$row[0]</option>";
    }
    echo "</select>";  
?>  
</div>
<div>
<label for="rating">Ratings: </label>
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
<label for="head">Head: </label>
</div>
<div>
<input type="text" id="head" name="head">
</div>
<div>
<label for="body">Body: </label>
</div>
<div>
<textarea id="body" name="body"></textarea>
</div>
<div>
<label for="travellertype">Traveller type: </label>
</div>
<div>
<select id="travellertype" name="travellertype">
<option value="solo">Solo</option>
<option value="family">Family</option>
<option value="group">Group</option>
<option value="business">Business</otpion>
<option value="couple">Couple</option>
</select>
</div>
<?php
$today = date("y.m.d");
?>
<input type="hidden" id="review_dt" name="review_dt" value=<?=$today?>>
<input type="submit" id="addreview" name="addreview" value="Add new review">
</form>
</body>
</html>