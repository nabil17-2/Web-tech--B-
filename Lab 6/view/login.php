<html>

<head>

<title> Login </title>

</head>



<body bgcolor=" #f9e79f ">

<form action="../controller/logCk.php" method="post">

<center>
<h1> Login</h1>

User Name :
<input value="<?php if(isset($_COOKIE['username'])){
	echo $_COOKIE['username'];
	
}?> " type="text" name="uname" /><br> <br>
Password  : <input type="password" name="pass" value="<?php if(isset($_COOKIE['password'])){
	echo $_COOKIE['password'];
	
}?> " /><br>
<br>
<input type="submit" name="sbt" value="Login" /><br>
<input type="checkbox" value="checked" name="remember">Remember Me
</form>
<a href="regi.php">Signup</a><br/>
<a href="index.html">Home</a><br/><br/><br/>
</center>
</html>