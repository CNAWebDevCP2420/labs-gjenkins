<!DOCTYPE>

<html>

<head>
	<title>While Logic</title>
</head>


<body>


<?php

$Count = 1;
$Numbers = array();


while ($Count <= 100) {
	$Numbers[$Count] = $Count;
	++$Count;
}
	
foreach ($Numbers as $CurNum) {
	echo "<p>$CurNum</p>";
}

?>

</body>

</html>