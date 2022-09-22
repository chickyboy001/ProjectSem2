<?php
class EditProduct
{
    public function __construct()
    {
        require '../../Model/Product.php';
        require '../../Model/Category.php';
        $productModel = new Product();
        $categoryModel = new Category();

        if (isset($_GET['productId'])) {
            $product_id = $_GET['productId'];
            $product = $productModel->getProduct($product_id);

            if (isset($_POST['editProduct'])) {
                $product_name = $_POST['product_name'];
                $slug = changeTitle($product_name);
                $sex = $_POST['sex'];
                $price = $_POST['price'];
                $category_id = $_POST['category_id'];

                $productModel->editProduct($product_id, $slug, $sex, $price, $category_id);
            }
            require 'pages/product/edit.php';
        }
    }
}