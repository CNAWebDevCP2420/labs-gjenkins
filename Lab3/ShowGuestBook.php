<!DOCTYPE>

<html>

<head>
<title>Show Guest Book</title>
</head>

<body>

<?php

$GuestBook = "guestbook.txt";

$Guests = file_get_contents($GuestBook);
echo $Guests;

?>

</body>

</html>

