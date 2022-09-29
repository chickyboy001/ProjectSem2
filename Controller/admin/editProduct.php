<?php
class EditProduct
{
    public function __construct()
    {
        require '../../Model/Product.php';
        require '../../Model/Category.php';
        $productModel = new Product();
        $categoryModel = new Category();
        $categories = $categoryModel->showAll();

        if (isset($_GET['productId'])) {
            $product_id = $_GET['productId'];
            $product = $productModel->getProduct($product_id);

            if (isset($_POST['editProduct'])) {
                $product_name = $_POST['product_name'];
                if (isset($_POST['sex'])) {$sex = $_POST['sex'];
                } else { $sex = $product['sex'];}
                $price = $_POST['price'];
                if (isset($_POST['category_id'])) {$category_id = $_POST['category_id'];
                } else { $category_id = $product['category_id'];}

                $productModel->editProduct($product_id, $product_name, $category_id, $sex, $price);
                header('Location: ?controller=productDetail&productId=' . $product_id);

            }
            require 'pages/product/edit.php';
        }
    }
}