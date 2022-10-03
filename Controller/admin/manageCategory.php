<?php

class ManageCategory
{
    public function __construct()
    {
        require_once '../../Model/Category.php';
        $cateModel = new Category();
        $categories = $cateModel->showAll();
        if (isset($_POST['addCategoryName'])) {
            $name = ucfirst($_POST['CategoryName']);

            if ($name) {
                $cateModel->addCategory($name);
                echo "<script>alert('Thêm danh mục thành công')</script>";
                header("Refresh:0");
            }
        }
        if (isset($_POST['editCategory'])) {
            $category_id = $_POST['categoryId'];
            $category_name = $_POST['updateCateName'];
            $status = $_POST['statusCate'];
            $cateModel->updateCategory($category_id, $category_name, $status);
            header("Refresh:0");
        }
        require 'pages/category/manage.php';
    }
}