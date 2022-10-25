<?php
class ListProduct {
	public function __construct()
	{
        require_once('Model/Order.php');
        require_once('Model/Product.php');
        require_once('Model/Category.php');
        require_once('Model/Color.php');
		$cateModel = new Category();
        $productModel = new Product();
        $colorModel = new Color();
        $categories = $cateModel->showAll();
        
        if(isset($_GET['category'])){
            $categoryif = $cateModel->getCategory($_GET['category']);
            $products = $productModel->getProductByCategory($_GET['category']);
            require('View/client/pages/product/listProduct.php');
        }

        if(isset($_GET['searchValue'])){
            $seachValue = trim($_GET['searchValue']);
            $products = $productModel->searchProductOrderByPrice($seachValue);
            require('View/client/pages/product/listProduct.php');
        }
        
        
	}
}
?>