<?php
class ProductPage
{
    public function __construct()
    {
        require_once('Model/Product.php');
        require_once('Model/Color.php');
        require_once('Model/Size.php');
        require_once('Model/Category.php');
        $productModel = new Product();
        $colorModel = new Color();
        $sizeModel = new Size();
        $cateModel = new Category();
        $categories = $cateModel->showAll();
        if (isset($_GET['productId'])) {
            $product_id = $_GET['productId'];
            $product = $productModel->getProduct($product_id);
            $colors = $productModel->getColorOfProduct($product_id);
            

            if (isset($_POST['editColor'])) {

                
            }
            require('View/client/pages/product/productPage.php');
        }
    }
}