<?php
class EditProduct {
	public function __construct()
	{
		require('../../Model/Product.php');
		require('../../Model/Category.php');
		$productModel = new Product();
		$categoryModel = new Category;
		
		require('pages/product/edit.php');
	}
}
?>