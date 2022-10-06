<?php
class ProductPage
{
    public function __construct()
    {
        require('../../Model/Product.php');
        require('../../Model/Color.php');
        require('../../Model/Size.php');
        require('../../Model/Category.php');
        $productModel = new Product();
        $colorModel = new Color();
        $sizeModel = new Size();
        $cateModel = new Category();
        if (isset($_GET['productId'])) {
            $product_id = $_GET['productId'];
            $product = $productModel->getProduct($product_id);
            $colors = $productModel->getColorOfProduct($product_id);
            $categories = $cateModel->showAll();

            if (isset($_POST['editColor'])) {

                
            }
            require('pages/product/productPage.php');
        }
    }
}