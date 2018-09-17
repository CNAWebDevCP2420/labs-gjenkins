<!DOCTYPE>

<html>

<head>
	<title>Temp Conversion</title>
</head>


<body>


<?php 

$Fahrenheit = 0;

while ($Fahrenheit <=100) {
	$Celsius = (($Fahrenheit-32)*(5/9));
	echo "Fahrenheit $Fahrenheit is $Celsius Celsius<br />";
	$Fahrenheit++;
}

?>



</body>

</html>