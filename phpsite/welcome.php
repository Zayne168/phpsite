<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Zayne Bonner  
CSC 155 -->

<html>
<head>
<?php
require("library/phpfunctions.php");
session_start();
checklogin();?>
</head>
<body>
<?php readfile("library/header.html"); 
echo "welcome!"; ?>
<?php readfile("library/footer.html"); ?>
</body>