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
        $_SESSION['shoppingCart']= array(
            0 => array(
                'product_id' => 1,
                'product_name' => 'Áo thun nữ',
                'image' => 'ezgif-5-9b70b8b517.jpg',
                'color_name' => 'đen',
                'size_name' => 'XL',
                'unit_price' => '240000',
                'quantity' => 1
            ),
            1 => array(
                'product_id' => 2,
                'product_name' => 'Áo thun nam',
                'image' => 'ezgif-5-9b70b8b517.jpg',
                'color_name' => 'trắng',
                'size_name' => 'L',
                'unit_price' => '320000',
                'quantity' => 2
            ),
            2 => array(
                'product_id' => 3,
                'product_name' => 'Áo hoodie',
                'image' => 'ezgif-5-9b70b8b517.jpg',
                'color_name' => 'xanh',
                'size_name' => 'XL',
                'unit_price' => '250000',
                'quantity' => 1
            ),
        );
        if (isset($_GET['productId'])) {
            $product_id = $_GET['productId'];
            $product = $productModel->getProduct($product_id);
            $colors = $productModel->getColorOfProduct($product_id);
            if (isset($_POST['addToCart'])) {

                
            }
            require('View/client/pages/product/productPage.php');
        }
    }
}