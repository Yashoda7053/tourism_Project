<?php
$con = mysql_connect("localhost","root","");
$db= mysql_select_db("sign",$con);
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select user from sign_table where user='$user_check'",$con);
$row= mysql_fetch_assoc($ses_sql);
$login_session = $row['user'];
if(!isset($login_session)){
mysql_close($con);
header('Location:signin.php');
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
