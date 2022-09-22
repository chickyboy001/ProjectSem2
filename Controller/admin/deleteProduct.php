<?php

class DeleteProduct {
	public function __construct()
	{
		require('../../Model/Product.php');
		$productModel = new Product();
		if (isset($_GET['product_id'])) {
			$product_id = $_GET['product_id'];
			$productModel->deleteProduct($product_id);
			header('Location: ?controller=showProduct');
		}
		require('pages/category/add.php');
	}
}
?>