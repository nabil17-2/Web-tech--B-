<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
<H1>DISPLAY</H1>
<table>
	<thead>
		<tr>
			<th> Name </th>
			<th> Buying Price </th>
			<th> Selling Price </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product_id): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product_id['id'] ?>"><?php echo $product_id['name'] ?></a></td>
		        <td><?php echo $product_id['buyingprice'] ?></td>
		        <td><?php echo $product_id['sellingprice'] ?></td>
		        <td><a href="editProduct.php?id=<?php echo $product_id['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product_id['id'] ?>">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>