<div class ="dynamic_content">
<div id ="text-heading"> Products</div>
<?php
include('inc_Connection.php');
$SQL = "SELECT * FROM Products ORDER BY ProductNum ASC";
$result = mysqli_query($DBConnect,$SQL);
if (!empty($result)) { 
	while($product_array = mysqli_fetch_assoc($result)){		
?>
	<div class="product-item">
		<form method="post" action="inc_Store.php?action=add&code=<?php echo $product_array["ProductNum"]; ?>">
		<div class="product-image" ><img src="<?php echo $product_array["ProductImage"]; ?>"></div>
		<div class="product-title"><?php echo $product_array["ProductName"]; ?></div>
		<div class="product-price"><?php echo "$".$product_array["ProductPrice"]; ?></div>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div>
		</form>
		<?php
	}
}
?>
</div>