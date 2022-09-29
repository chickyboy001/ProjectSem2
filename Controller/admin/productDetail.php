<?php
class ProductDetail {
	public function __construct()
	{
		require('../../Model/Product.php');
		$productModel = new Product();
        if (isset($_GET['productId'])) {
			$product_id = $_GET['productId'];
			$product = $productModel->getProduct($product_id);

			require('pages/product/detail.php');
		}
		
	}
}
?>