

<?php
include('session.php');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Your home page</title>
<link href="comp_project/style2.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="profile">
<b id="welcome">Welcome:<i><?php echo $login_session; ?></i></b>

<b id="logout"><a href="comp_project/logout.php">Log Out</a></b>
</div>





</body>
</html>
