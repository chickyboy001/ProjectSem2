<?php
class Home {
	public function __construct()
	{
		require_once('Model/Product.php');
		require_once('Model/Color.php');
		require_once('Model/Size.php');
        require_once('Model/Account.php');
		require_once('Model/Category.php');
		$cateModel = new Category();
		$productModel = new Product();
		$colorModel = new Color();
		$sizeModel = new Size();
        $accModel = new Account();
		$categories = $cateModel->showAll();
		$products = $productModel->showAllLimit();
		$products2 = $productModel->showAllLimitASC();
		require('View/client/pages/home.php');
	}
}
$home = new Home();