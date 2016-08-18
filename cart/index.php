<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
require 'connect.php';
$sql = 'SELECT * FROM items';
$result = mysqli_query($con, $sql);
 ?>
<h2> Select the items: </h2>
 <table id="t01">
 <tr>
 	<th>Description</th>
 	<th>Product Id</th>
 	<th>Price</th>
 	<th>Quantity (in stock)</th>
 	<th>Buy</th>
 </tr>
 	<?php while($product = mysqli_fetch_object($result)) { ?> 
	<tr>
		<td> <?php echo $product->desc; ?> </td>
		<td> <?php echo $product->itemno; ?> </td>
		<td> <?php echo $product->price; ?> </td>
		<td> <?php echo $product->stock; ?> </td>
		<td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a> </td>
	</tr>
	<?php } ?>
 </table>
</body>

 </html>