
<?php
session_start();
$error='';
if(isset($_POST['submit'])){
if(empty($_POST['user']) || empty($_POST['password'])){
$error= "*usermane and passsword required!!";
}
else
{
$user=$_POST['user'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sign",$con);
$query=mysql_query("select * from sign_table where password='$password' AND user='$user'",$con );
$rows=mysql_num_rows($query);
if($rows == 1){
$_SESSION['login_user'] =$user;
header("location:home1.php");
}else{
$error = "*username or password invalid";
}
mysql_close($con);
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

<!--$con=mysql_connect('localhost','root');
if($con){
  echo"Connection Successful";
  }
  else{
  echo"no connection";
  
  }
  mysql_select_db("sign",$con);
  $name = $_POST['user'];
  $pass = $_POST['password'];
  
  $q = "select*from sign_table where name = '$name' && password = '$pass'";
  $result = mysql_query($con, $q);
  $num = mysql_num_rows($result);
  if($num ==1){
  $_SESSION['username'] = $name;
  header('location:home1.php');
  
  }
  else{
  header('location:signin.php');
  }
  
  -->