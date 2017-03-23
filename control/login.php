<?php
	include('config.php');
	if(isset($_POST['submit']))
	{
		
		$email = mysql_real_escape_string($_POST['email']);
		$pass = mysql_real_escape_string($_POST['pass']);
		$query1 = mysql_query("SELECT pass FROM login WHERE email=$email");
		if($query1){
			$password = mysql_fetch_array($query1);
			if($pass === $password){
				header('/AWPProject/index.php');
			}
			else{
				echo "Invalid password";
			}		
		}
		else{
			echo "Sign up first!";
			header('/AWPProject/index.php');
		}	
	}

?>
