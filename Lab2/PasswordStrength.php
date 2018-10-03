<!DOCTYPE>

<html>

<head>
<title>Password Strength</title>
</head>

<body>

<h1>Password Strength</h1><hr />

<?php

$Passwords = array(
	"Jenkins#13",
	"Koebel@01",
	"CheeseSteak%11",
	"Pepperoni#11",
	"Apple#",
	"banana#0",
	"@1113AAA",
	"Cucumber1",
	"Porky Pig#3",
	"SuperHeroTomatoSauce#3"	
	);

//Test for capital letters

foreach ($Passwords as $check) {

echo "For password $check: ";

	//Test for capital letters

	if (!preg_match('/[A-Z]/', $check))
		echo "There is not a capital letter. ";
	
	//Test for lowercase letters

	else if (!preg_match('/[a-z]/', $check))
		echo "There is not a lowercase letter. ";
	
	//Test for numbers

	else if (!preg_match('/[0-9]/', $check))
		echo "There is not a number. ";
	
	//Test for special characters

	else if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $check))
		echo "There is not a special character. ";
	
	//Test for space

	else if (preg_match('/[ ]/', $check))
		echo "There is a space. ";
	
	//Test for too short
	
	else if (strlen($check) < 8) 
		echo "The password is too short. ";
	
	//Test for too long
	
	else if (strlen($check) > 16) 
		echo "The password is too long. ";
	
	else echo "The password is strong.";
	
echo "<br />";
	
}
	
?>

</body>

</html>