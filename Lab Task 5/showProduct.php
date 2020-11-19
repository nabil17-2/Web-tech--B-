<?php  
require_once 'controller/productInfo.php';

$product_id = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th> Name </th>
		<th> Buying Price </th>
		<th> Selling Price </th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product_id['id'] ?>"><?php echo $product_id['name'] ?></a></td>
		<td><?php echo $product_id['buyingprice'] ?></td>
		<td><?php echo $product_id['sellingprice'] ?></td>
	</tr>

</table>


</body>
</html>