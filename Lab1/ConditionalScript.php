<!DOCTYPE>

<html>

<head>
	<title>Conditional Script</title>
</head>


<body>


<?php

if ($IntVariable > 100) {
	$Result = '$IntVariable is greater than 100';
}
else $Result = '$IntVariable is less than or equal to 100';

echo "<p>$Result</p>";

?>

</body>

</html>