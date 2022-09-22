<?php
class ShowProduct {
	public function __construct()
	{
		require('../../Model/Product.php');
		require('../../Model/Category.php');
		$productModel = new Product();
		$cateModel = new Category;
		$products = $productModel->showAll();
		
		require('pages/product/showAll.php');
	}
}
?>