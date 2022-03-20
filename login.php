<html>
<head>
<?php
require('phpfunctions.php');
// local functions
function login($user, $pass){
    if ($user == 'zayne' && $pass == 'bon')
    return True;   // 
    else
    return False;
}
$message = '';
//tests if we have been here before
if (isset($_POST['choice'])){
    if ( checkLogin($_POST['155username'], $_POST['155password']) )
    {
    // http header
    header('Location: welcome.php');
    $_SESSION['username'] = $_POST['155username'];
    }
    else
    {
    $message = 'Invalid Username or Password';
    }
}
else {
}
?>
</head>
<body>
<?php readfile('lib/header.html'); ?>
<h3>do not use legitimate passwords</h3>
<form method='POST'>
User: <input type='text' name='155username' value='<?php echoPost("155username"); ?>' > <br>
Password: <input type='password' name='155password' value='<?php echoPost("155password"); ?>'> <br>
<input type='submit' name='choice' value='Log In'>
</form>
<h2><?php echo $message;?></h2>
<p>The username is <b>zayne</b> and the password is <b>bon</b></p>
<?php readfile('lib/footer.html'); ?>
</body>
</html>
