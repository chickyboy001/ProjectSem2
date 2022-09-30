<?php
class ProductDetail {
	public function __construct()
	{
		require('../../Model/Product.php');
		require('../../Model/Color.php');
		$productModel = new Product();
		$colorModel = new Color();
        if (isset($_GET['productId'])) {
			$product_id = $_GET['productId'];
			$product = $productModel->getProduct($product_id);
			$colors = $productModel->getColorOfProduct($product_id);

			require('pages/product/detail.php');
		}
		
	}
}
?>