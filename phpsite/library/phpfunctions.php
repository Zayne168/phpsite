<html>
  <head>
  <?php 
function echoPost($name){
 if (isset($_POST[$name]))
  echo htmlspecialchars($_POST[$name]);
}

function checklogin($group="None Specificed")
{
    if ( !isset( $_SESSION['username'] ) )
    {
    // bounce on invalid user
    header("Location: login.php");
    }
}

function echoSession($name) 
{
    if (isset($_SESSION[$name]))
    echo htmlspecialchars($_SESSION[$name]);
}
?>
  </head>
</html>
<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->