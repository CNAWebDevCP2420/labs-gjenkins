<!DOCTYPE>

<html>

<head>
	<title>Odd Numbers</title>
</head>


<body>


<?php

$Count = 1;

while ($Count < 100) {
	if ($Count % 2 == 0) {
		$Count++;
	}
	else {
		echo "$Count ";
		$Count++;
	}
	
}

?>

</body>

</html>