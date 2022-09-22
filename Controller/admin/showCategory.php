<?php
class ShowCategory {
	public function __construct()
	{
		require('../../Model/Product.php');
		require('../../Model/Category.php');
		$productModel = new Product();
		$categoryModel = new Category;
		$products = $productModel->showAll();
		
		require('pages/product/showAll.php');
	}
}
?>