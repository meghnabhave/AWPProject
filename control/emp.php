
<?php
include("config.php");

if(isset($_POST['submit'])){

	$company=mysql_real_escape_string($_POST['company']);
	$field=mysql_real_escape_string($_POST['field']);
	$phone=mysql_real_escape_string($_POST['phone']);
	$email=mysql_real_escape_string($_POST['email']);
	$description=mysql_real_escape_string($_POST['description']);
	$pass=mysql_real_escape_string($_POST['pass']);
	$query1 = mysql_query("INSERT INTO employer(company,field,phone,email,description)
		        VALUES ('$company','$field','$phone','$email','$description')");
	$e = 'e'
	$query = mysql_query("INSERT INTO login(type,email,pass)
			VALUES('$e','$email','$pass')");
	if($query1){
		header("location:../index.php");
	}
	
} 
 ?>
	
