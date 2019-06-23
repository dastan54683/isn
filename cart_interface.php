<?php
session_start(); 
include_once 'registr/db/dbconnection.php';
$db=new DB;
include 'cart.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript" src="functions.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
</head>

<body>
<div id="cart_interface">
	<table cellpadding="4">
	<?php 
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
			<span onclick="remove_from_cart(<?php echo $key?>)">очистить</span>
		</td>
		</tr>
	<?php 	
	}
	?>

	<div>123 <?php echo $_SESSION['products_incart']?> 123 <?php echo $_SESSION['cart_coast']?></div>
</div>
<a href="index.php">��������� � ��������</a>
</body>
</html>
