<!DOCTYPE>

<html>

<head>
<title>Show Bowlers</title>
</head>

<body>

<?php

$Bowlers = "bowlers.txt";

$People = file_get_contents($Bowlers);
echo $People;

?>

</body>

</html>

