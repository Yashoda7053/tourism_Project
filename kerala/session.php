<?php
//Establishing Connection with server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost","root", "");
//seclting database
$db = mysql_select_db("company", $connection);
session_start(); //starting session
//storing session
$user_check=$_SESSION['login_user'];
//SQL Query Fetch complete information of user
$ses_sql=mysql_query("select username from login where username = '$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session))
{
mysql_close($connection); //closing connection
header('Location: index1.php'); //Redirecting To Home Page
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
