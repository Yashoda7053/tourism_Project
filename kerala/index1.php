<?php

include('login.php'); //INCLUDES Login script

if(isset($_SESSION['login_user'])){ 
header("location: profile.php");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form in PHP With Session</title>
<link href="style2.css" rel="stylesheet" type="text/css" />
</head
><body>
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>

<form action="" method="post">
<label>UserName:</label>

<input id="name" name="username" placeholder="username" type="text" />

<label>Password:</label>
<input id="password" name="password" placeholder="*********" type="password" />
<input name="submit" type="submit" value="Login" />
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
