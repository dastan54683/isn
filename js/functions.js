function add_to_cart(product_id) {
	$.post( "backend/add_to_cart.php", {product_id: product_id}, update_cart); 
	alert('Товар добавлен в корзину');
}
function update_cart() {
	$.post( "backend/update_cart.php", {}, on_success); 
	function on_success(data)
	{
		$('#small_cart').html(data);
	}
}
function remove_from_cart(product_id) {
	$.post( "backend/remove_from_cart.php", {product_id:product_id}, update_cart_interface); 
}
function update_product_count(product_id, count) {
	$.post( "backend/update_product_count.php", {product_id:product_id, count:count}, update_cart_interface); 
}
function update_cart_interface() {
	$.post( "backend/cart_interface.php", {}, on_success); 
	function on_success(data)
	{
		$('#cart_interface').html(data);
	}
}

