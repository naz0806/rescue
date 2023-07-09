<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
	<title>Admin Login Page</title>
 	<link rel="stylesheet" type="text/css" href="AdminLogin.css">
</head>
<body>
    <h2>Welcome to Glory Bus,</h2><br>
    <h3>Admin Login Page</h3><br>
    <div class="login">
    <form id="login" method="get" action="login.php">
    <div class="input-style">
    	  <div class="input-div">
	    	<label><b>User Name</b></label>
        	<input type="text" name="Uname" id="Uname" placeholder="Username">
	    </div>
        <div class="input-div">
        	<label><b>Password</b></label>
        	<input type="password" name="Pass" id="Pass" placeholder="Password">
        </div>
        <input type="button" name="log" id="log" value="Log In Here">
        <br><br>
    </div>
    </form>
</div>
</body>
</html>