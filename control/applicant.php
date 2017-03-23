

<?php

include('config.php');
if(isset($_POST['submit'])){

	$name=mysql_real_escape_string($_POST['name']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$phone=mysql_real_escape_string($_POST['phone']);
   	$address=mysql_real_escape_string($_POST['address']);
	$email=mysql_real_escape_string($_POST['email']);
	$pass=mysql_real_escape_string($_POST['pass']);
	$query1 = mysql_query("INSERT INTO applicant(name,lname,dob,phone,address,email)
		        VALUES ('$name','$lname','$dob','$phone','$address','$email')");
	$a = 'a';
	$query = mysql_query("INSERT INTO login(type,email,pass)
			VALUES('$a','$email','$pass')");
	if($query and $query1){
		header("location:../index.php");
	}
	
	
} 
 ?>
	
