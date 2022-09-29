<?php
class AddProduct
{
    public function __construct()
    {
        require '../../Model/Product.php';
        require '../../Model/Category.php';
        $productModel = new Product();
        $categoryModel = new Category();
        $categories = $categoryModel->showAll();

        if (isset($_POST['addProduct'])) {
            $product_name = $_POST['product_name'];
            $sex = $_POST['sex'];
            $price = $_POST['price'];
            $category_id = $_POST['category_id'];

            $PID = $productModel->addProduct($product_name,$category_id, $sex, $price);
            header('Location: ?controller=productDetail&productId=' . $PID);
            
        }
        require 'pages/product/add.php';

    }
}