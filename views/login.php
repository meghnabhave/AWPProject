<!DOCTYPE html>
<head> 
	<title> </title>
	
	<style>
	
	
	</style>
</head>
<body style="padding:40px">

<h1>Log in </h1>

<script src="jquery-3.1.1.min.js"></script>
<script src="bootstrap3/js/bootstrap.min.js"></script>
<link rel = "stylesheet" type="text/css" href ="bootstrap3/css/bootstrap.min.css">
<form method="post" action="../control/login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username / Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
