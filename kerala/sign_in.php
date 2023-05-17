<?php
include_once('sign_con.php');

?>


<?php
if(isset($_POST['submit']))
{
$user = $_POST['user'];
$password = $_POST['password'];

if(empty($user))
{
   $msg = "Please enter Userame";
}
else if(empty($password))
{
   $msg = "Please enter password!!";
   }
else
{
   if(mysql_query("insert into sign (user,password) values('$user','$password')"))
   {
   $msg1 = " You Succesfuly SignUp, Thankyou !";
}
}      
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
