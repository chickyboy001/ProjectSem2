<?php
class ShowProduct {
	public function __construct()
	{
		require_once('../../Model/Product.php');
		require_once('../../Model/Category.php');
		require_once('../../Model/Color.php');
		require_once('../../Model/Size.php');
		$productModel = new Product();
		$cateModel = new Category();
		$colorModel = new Color();
		$sizeModel = new Size();
		$products = $productModel->showAll();
		
		require('pages/product/showAll.php');
	}
}
?>