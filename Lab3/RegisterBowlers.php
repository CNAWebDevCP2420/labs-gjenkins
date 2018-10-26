<!DOCTYPE>

<html>

<head>
<title>Register Bowlers</title>
</head>

<body>

<?php

if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['average'])) {
	echo "<p>Please make sure all fields are filled. Click your browser's Back button to return to the Guest Book.</p>\n";
}
else {
	$Name = addslashes($_POST['name']);
	$Age = addslashes($_POST['age']);
	$Average = addslashes($_POST['average']);
	
	$Bowlers = fopen("bowlers.txt", "ab");
		if (is_writeable("bowlers.txt")) {
			if (fwrite($Bowlers, $Name . ", " . $Age . ", " . $Average . "\r\n"))
				echo "<p>Thank you for Registering!</p>\n";
			else
				echo "<p>Registration denied.</p>\n";
		}
		else
			echo "<p>Cannot write to the file.</p>\n";
	fclose($Bowlers);
}

?>

</body>

</html>

