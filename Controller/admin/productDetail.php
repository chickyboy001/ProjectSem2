<?php
class ProductDetail {
	public function __construct()
	{
		require('../../Model/Product.php');
		require('../../Model/Category.php');
		$productModel = new Product();
        $cateModel = new Category();
        if (isset($_GET['productId'])) {
			$product_id = $_GET['productId'];
			$product = $productModel->getProduct($product_id);

			require('pages/product/detail.php');
		}
		
	}
}
?>