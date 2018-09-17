<!DOCTYPE>

<html>

<head>
	<title></title>
</head>


<body>


<?php

$DaysArray = array(
	"Sunday",
	"Monday",
	"Tuesday",
	"Wednbesday",
	"Thursday",
	"Friday",
	"Saturday"
);

echo "The days of the week in English are:";

for ($i = 0; $i < count($DaysArray); $i++) {
	echo " $DaysArray[$i]";
}

echo ".<br /><br />";

$DaysArray = array(
	"Dimanche",
	"Lundi",
	"Mardi",
	"Mercredi",
	"Jeudi",
	"Vendredi",
	"Samedi"
);

echo "The days of the week in French are:";

for ($i = 0; $i < count($DaysArray); $i++) {
	echo " $DaysArray[$i]";
}

echo ".";

?>

</body>

</html>