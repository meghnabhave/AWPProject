<!DOCTYPE html>
<head> 
	<title> </title>
	
	<style>
	
	</style>
</head>
<body style="padding:40px">
<script src="jquery-3.1.1.min.js"></script>
<script src="bootstrap3/js/bootstrap.min.js"></script>
<link rel = "stylesheet" type="text/css" href ="bootstrap3/css/bootstrap.min.css">
<h1 style="color:grey;text-align:center;">SIGN IN AS AN EMPLOYER</h1>
<br>
<br>
<form class="form-inline" method="post" onsubmit="return validate()" action="../control/emp.php">
  <div class="form-group">
    <label for="exampleInputName2" style="color:grey">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name">
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-group">
    <label for="exampleInputField" style="color:grey">Field of specialization:</label>
    <input type="text" class="form-control" id="field" placeholder="Software" name="field">
  </div>
  <br>
  <br>
  <div class="form-group">
    <label for="exampleInputNumber" style="color:grey">Phone Number:</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-group">
    <label for="exampleInputEmail2" style="color:grey">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="jane.doe@example.com" name="email">
  </div>

<br>
<br>
 <label style="color:grey">Description of the organization:</label>
 <textarea class="form-control" rows="4" style="color:grey" name="description"></textarea>
  <br>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password:</label>
    <input type="password" class="form-control" id="pass2" name="pass2">
  </div>

  <button type="submit" class="btn btn-default" style="color:white;background-color:blue;text-align:center;" name="submit">Sign In</button>

</form>


<script>
	function validate(){
		var pass1 = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
	}
</script>
</body>
