<!DOCTYPE html>
<head>
<style>
.button {
    background-color: #5F9F9F; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 4px;
    cursor: pointer;
	padding: 14px 40px;
}
</style>

<script src="jquery-3.1.1.min.js"></script>
<script src = "bootstrap-3.3.7-dist"></script>
<link rel = "stylesheet" type = "text/css" href = "bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<h1 style ="text-align:center"> Login for applicants</h1>

<form method="post" action="../control/applicant.php">
	<div class ="form-group">
	  <fieldset>
	    <legend>Personal information:</legend>
	    First name:<br>
	    <input type="text" name="name" class="form-control"><br>
	    Last name:<br>
	    <input type="text" name="lname" class="form-control"><br>
		Date of Birth:<br>
	    <input type="datetime" name="dob" class="form-control"><br><br>
	  </fieldset>
	  <fieldset>
	    <legend>Contact Details:</legend>
	    Phone number:<br>
	    <input type="number" name="phone" class="form-control"><br>
	    Address:<br>
	    <input type="text" class="form-control" name="address"><br><br>
	  </fieldset>	
 	 </div>
  <fieldset>
    <legend>Registration Details:</legend>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  </fieldset>
  <div class="form-group" style="text-align:center">
    <label for="exampleInputFile">Upload Resume</label><br>
	<button type="submit" class="btn btn-default">File upload</button>
  </div>
  <p style="text-align:center">Don't know how to build a resume? <a href="https://www.livecareer.com/resume-builder">Click here</a> for some tips</p> 
  <div style="text-align:center">
  <button type="submit" class="button button1" name="submit">Submit</button>
  </div>
</form>

</body>
</html>
