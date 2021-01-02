<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:index.php");
}
?>
<html>
	<head>
		<title>Admin interface</title>
		<link href="css/Home.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="main">
			<div class="header">
				<div class="headertext">
					<h2>Online Shopping System</h2>
				</div>
				<div class="menu">
					<ul>
						<li><a href="Home.php">Home</a></li>
						<li><a href="Manage_User.php">Manage User</a></li>
						<li><a href="Result.php">Result</a></li>
						<li><a href="Account.php">Account</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="thing">
				<div class="content">
					<div class="left">
						<div class="topic">
							<h2> Your Activity:</h2>
							<hr>
						</div>
						
					</div>
				</div>
			</div>
			<div class="right">
				<h1>Welcome To Admin Panel</h1>
					<h3>Admin can manage User and exam from here</h3>
			</div>
			<div class="footer">
			
			</div>
		</div>
	</body>
</html>