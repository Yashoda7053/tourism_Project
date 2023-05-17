
<?php
session_start();
$error='';
if(isset($_POST['submit']))
{
if (empty($_POST['username'])|| empty($_POST['password'])){
$error="Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
//Establishing connection with server by passing server_name, usre_id and password as a parameter

$connection = mysql_connect("localhost", "root", "");
//To protect Mysql injection for security purpose

$username = stripslashes($username);
$password = stripslashes ($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
//selecting database
$db = mysql_select_db("company", $connection);

$query = mysql_query("select * from login where password ='$password' AND username='$username'" , $connection);
$rows = mysql_num_rows($query);
if ($rows == 1){
$_SESSION['login_user'] = $username; // intializing session
header("location: profile.php"); //Redirecting to other page
}
else
{
$error = "Username or Password is invalid";
}
mysql_close($connection); //clossing connection
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
