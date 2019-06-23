<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/indaspress/cart.php';
include_once $_SERVER['DOCUMENT_ROOT'].'registr/db/dbconnection.php';
$db=new DB;

echo '<table cellpadding="4">';
foreach ($_SESSION['products'] as $key=>$value) {
	$q="SELECT * FROM products WHERE id='$key'";
	$product=$db->fetch_assoc($db->query($q));
?>	
	<tr>
	<td><?php echo $product['name']?></td>
	<td>
	<input type="text" size="2" id="product_count_<?php echo $key;?>" value="<?php echo $_SESSION['products'][$key]['count']?>" /> 
		<span onclick="update_product_count(<?php echo $key?>, $('#product_count_<?php echo $key;?>').val())">��������</span>
	</td>
	<td>
	 
		<?php echo ($_SESSION['products'][$key]['count']*$_SESSION['products'][$key]['coast'])?>
	</td>
	<td>
		<span onclick="remove_from_cart(<?php echo $key?>)">очистить корзину</span>
	</td>
	</tr>
<?php 	
}
?>
</table>
<div> <?php echo $_SESSION['products_incart']?>  <?php echo $_SESSION['cart_coast']?></div>
