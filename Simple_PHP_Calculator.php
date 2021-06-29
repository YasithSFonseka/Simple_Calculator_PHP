<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>


<form action="test.php" method="post">
  Enter First Number: <input type="text" name="first"><br>
  Select Operator:
	<select name="operator">  
	  <option value="Select">Select Operator</option>
	  <option value="+">+</option>  
	  <option value="-">-</option>  
	  <option value="*">*</option>  
	  <option value="/">/</option>  
	  <option value="%">%</option> 
	</select><br>
  Enter Second Number: <input type="text" name="second"><br>
  <input type="submit" value="Submit" />
</form>

<?php

if (isset($_POST["operator"])) {
	
$first = $_POST["first"];
$second = $_POST["second"];
$operator = $_POST['operator'];


if($operator == '+') {
	$ans = $first + $second;
	echo "Answer : $ans";
}
else if($operator == '-') {
	$ans = $first - $second;
	echo "Answer : $ans";
}
else if($operator == '*') {
	$ans = $first * $second;
	echo "Answer : $ans";
}
else if($operator == '/') {
	$ans = $first / $second;
	echo "Answer : $ans";
}
else if($operator == '%') {
	$ans = $first % $second;
	echo "Answer : $ans";
}
}
?>

</body>


</html>