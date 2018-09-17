<!DOCTYPE>

<html>

<head>
	<title></title>
</head>


<body>


<?php

$Number = 7.57;
$RoundedNumber = round($Number);

if (is_numeric($Number) && $RoundedNumber % 2 == 0) {
	echo "The number $Number is even.";
}
else echo "The number $Number is odd. ";

$Number = 9.1;
$RoundedNumber = round($Number);

if (is_numeric($Number) && $RoundedNumber % 2 == 0) {
	echo "The number is $Number even.";
}
else echo "The number $Number is odd.";


?>

</body>

</html>