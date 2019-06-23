<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/registr/db/dbconnection.php';
/**
* ���������:
* $product_id � ������������� ������
* $count � ���������� ������������ ������, �� ��������� 1, 
*/
function add_to_cart($product_id, $count=1) {
	$db=new DB;
	//���������, �� ��� �� �������� ����� � ������� �����:
	if (!empty($_SESSION['products'][$product_id])) {
		//����������� ���������� �� �������, ���� ����� ��� ��������:
		$_SESSION['products'][$product_id]['count']++;
	}
	else {
		//������� ������ ������, �� ������ ������, ����� � ��� ����.
		$_SESSION['products'][$product_id]=array();
		//��������� ���� ������ �� ���� ������:
		$q="SELECT price FROM products WHERE id='$product_id'";
		//��������� ��������� ������� � ������:
		$add_product=$db->fetch_assoc($db->query($q));
		//����� � ���, ���� �� ����� �������� � ���������:
		//$add_product=mysql_fetch_assoc(mysql_query($q));
		//��������� ����� � �������:
		$_SESSION['products'][$product_id]['coast']=$add_product['price'];
		$_SESSION['products'][$product_id]['count']=$count;
	}
	/*
	�������� ������� ��� �������� ��������� ������� � ���������� �������.
	����� � ����� ����� ���������, ����� ������� �� ���������� ������� � �������,
	� ���������� ����� �������, �.�. ���� � ������� 5 ������ ������ 1, � 2 � ������ 2, 
	�� ������� � ������� � 2, � �� 7.
	� ��� ���� ������, ����� ����� ���������� � ���� ������� ������� ����� 	������� � ���������� ������� � ���: update_cart()
	*/
	update_cart();
}
/**
 * ������������� �������
 */
function update_cart() {
	//���������� ������� � ������� ������� ��� ���������� ��������� � ������� 	//$_SESSION['products'] � ������� ����������� ������� PHP count():
	$_SESSION['products_incart']=count($_SESSION['products']);
	//������� ������� ���������:
	$_SESSION['cart_coast']=0;
	//��������� ������� (����������� ���� �� ���������� � ����������):
	foreach ($_SESSION['products'] as $key=>$value) {
		$_SESSION['cart_coast']+=$_SESSION['products'][$key]['coast']* $_SESSION['products'][$key]['count'];
	}
}
/**
* ��������� �� �� ���������, ��� � ������� add_to_cart()
*/
function update_product_count($product_id, $count) {
	$_SESSION['products'][$product_id]['count']=$count;
	//�������� update_cart() ����� ����������� ���������.
	update_cart();
}
/**
 * ������� �� �������
*/
function remove_from_cart($product_id) {
	unset($_SESSION['products'][$product_id]);
	update_cart();
}
