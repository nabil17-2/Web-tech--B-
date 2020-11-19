<?php 

require_once 'controller/productInfo.php';
$product_id = fetchProduct($_GET['$id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
  <H1>Edit Product</H1>
 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name"> Name </label><br>
  <input value="<?php echo $product_id['name'] ?>" type="text" id="name" name="name"><br>
  <label for="buyingprice"> Buying Price </label><br>
  <input value="<?php echo $product_id['buyingprice'] ?>" type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice"> Selling Price </label><br>
  <input value="<?php echo $product_id['sellingprice'] ?>" type="text" id="sellingprice" name="sellingprice"><br><br>
  
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="radio" name="Display" herf=showALLProducts.php> Display <br>
  <input type="submit" name = "updateProduct" value="Save">
 
</form> 


</body>
</html>

