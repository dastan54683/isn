<?php
//��������� ������
session_start();
include $_SERVER['DOCUMENT_ROOT'].'registr/db/dbconnection.php';
add_to_cart($_POST['product_id']);
?>

