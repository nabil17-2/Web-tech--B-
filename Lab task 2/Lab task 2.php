<!DOCTYPE HTML>  
<html>
<title> Form  </title>
</head>
<body>


<div>
<?php
if(isset($_POST[''])){
	echo 'User submitted.';
}
	?>
</div>


<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
<div class="container">
<h1>FORM</h1>


<label for="name"><b>Name</b></label></br>
<input type="text"  name="name" required<value="<?php echo $name;?>"></br>

</br>
</br>

<label for="name"><b> Email</b></label></br>
<input type="text"  name="email" required<value="<?php echo $name;?>"></br>

</br>
</br>


<b>Date of Birth</b>

</br>

DAY<input type="number" style="">
MONTH<input type="number" style="">
YEAR<input type="number" style="">


</br>

</br>
</br>


				<b>Gender</b><br>
				
					  <input type="radio" id="gender" name="gender" value="" required>
					  <label for="gender01">Male</label>
					  <input type="radio" id="gender" name="gender" value="">
					  <label for="gender02">Female</label> 
					  <input type="radio" id="gender" name="gender" value="other">
					  <label for="gender03">Other</label><br>
					  
						

</br>
</br>

			
				<b>Degree</b>				
				
				</br>
								
					<input type="checkbox" id="SSC" name="" value="" ><label for="SSC">SSC</label>
					<input type="checkbox" id="HSC" name="" value="" ><label for="HSC">HSC</label>
					<input type="checkbox" id="BSc" name="" value="" ><label for="BSc">BSc</label>
					<input type="checkbox" id="MSc" name="" value="" ><label for="MSc">MSc</label>
				
			


</br>

</br>
</br>

							<B>Blood Group</b>
				
					<select id="" style="" required>
					  <option value="" selected=""></option>
					  <option value="ab+">AB+</option>
					  <option value="ab-">AB-</option>
					  <option value="o+">O+</option>
					  <option value="o-">O-</option>
					  <option value="a+">A+</option>
					  <option value="a-">A-</option>
					  <option value="b+">B+</option>
					  <option value="b-">B-</option>
					</select>
				
			
			</br>
						
			
			
						
</br>
</br>
<input type="submit" name="create" value="Submit">
</body>
</html>

