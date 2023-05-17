<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit']))
{

 $name =  $_POST['name'];
 $email=  $_POST['email'];
 $add  =  $_POST['address'];
 $adm  =  $_POST['admission'];
 
 if(mysql_query("insert into contact_table (name,email,address,admission_date) values(' $name','$email','$add','$adm ')"))
 {

        echo('data inserted in database, Thank you!!');	 
	 
 }
}



?>




</body>
</html>
