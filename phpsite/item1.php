<html>
<head>
<?php
require("library/phpfunctions.php");
session_start();
checklogin();

 

if (!isset($_POST['choice']))
{}
else if ($_POST['choice'] == 'Buy')
{
    if (isset($_SESSION['goal']))
    $_SESSION['goal'] += $_POST['goal'];
    else
    $_SESSION['goal'] = $_POST['goal'];
}

?>
</head>
<body>
<?php readfile("library/header.html"); ?>

This is the soccer goal's page.<br>
In cart: <?php echoSession("goal") ?>

<form method='POST'>
<input type='number' name='goal' value='<?php echoPost("goal");?> '>
<input type='submit' name='choice' value='Buy'>
</form>

<?php readfile("library/footer.html"); ?>
</body>