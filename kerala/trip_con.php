<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$host="localhost";
$username="root";
$password="";
$dbname="book";
@mysql_connect($host,$username,$password)or die("Please check ussername and password!");
@mysql_select_db($dbname)or die("Not connected to databse!!");
?>




</body>
</html>
