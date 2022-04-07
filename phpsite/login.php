<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Zayne Bonner  
CSC 155 -->

<html>
<head>
<?php
require('library/phpfunctions.php');
// local functions
function login($user, $pass){
    if ($user == 'zayne' && $pass == 'bon')
    return True;  
    else
    return False;
}
session_start();
$message = '';
//if submit has value
if (isset($_POST['submit'])){
    if (login($_POST['155username'], $_POST['155password']) ){
    header("Location: welcome.php");
    $_SESSION['username'] = $_POST['155username'];
    }
    else{
    $message = 'Invalid Username or Password';
    }
}
else {
  
}
?>
</head>
<body>
<?php require('library/header.php'); ?>
<h3>do not use legitimate passwords</h3>
<form method='POST'>
User: <input type='text' name='155username' value='<?php echoPost("155username"); ?>' > <br>
Password: <input type='password' name='155password' value='<?php echoPost("155username"); ?>' > <br>
<input type='submit' name='submit' value='Log In'>
</form>
<h2><?php echo $message;?></h2>
<p>username: <b>zayne</b></br>password: <b>bon</b></p>
</body>
</html>