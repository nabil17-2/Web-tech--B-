<center>
<body bgcolor=" #f9e79f ">
<h2> Home</h2>
<?php
session_start();


$handle = fopen("../controller/pictures/images.txt", 'r');
			while (!feof($handle)) 
			{
				$data = fgets($handle);
				$data = explode('-', $data);

				if( trim($data[0]) == $_SESSION["uname"] )
				{
					$pic = trim($data[1]);
					$pic = "../controller/".$pic; 
					break;
				}
				
			}




//print_r($GLOBALS);
$file=fopen("../controller/pictures/images.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	if($_SESSION["uname"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>

	<img src="e-learning.png" width="600px" height="250px" /><br/><br/>
	Welcome: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<center>
	<a href="../controller/edit.php">Edit Info</a><br/>
	<a href="../controller/picture.php">Change Photo</a><br/>
	
	<a href="../view/travelHistory.php"> Course List</a><br/>

	<a href="../controller/logout.php">Log Out</a><br/>


	</center>
<?php


}
else{
	header("Location:login.php");
}
?>