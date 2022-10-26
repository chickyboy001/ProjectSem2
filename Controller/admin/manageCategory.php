<?php

class ManageCategory
{
    public function __construct()
    {
        require_once '../../Model/Category.php';
        $cateModel = new Category();
        $categories = $cateModel->showAll();
        if (isset($_POST['addCategoryName'])) {
            $name = trim($_POST['CategoryName']);
            $cate = $cateModel->getCategoryByName($name);
            $result = count($cate, COUNT_NORMAL);
            if ($result != 0 || $name == NULL) {
                echo "<script>alert('Danh mục bị trùng tên hoặc tên sai định dạng')</script>";
            } else {
                $cateModel->addCategory($name);
                echo "<script>alert('Thêm danh mục thành công')</script>";
                header("Refresh:0");
            }
        }
        if (isset($_POST['editCategory'])) {
            $category_id = $_POST['categoryId'];
            $category_name = trim($_POST['updateCateName']);
            $old_name = trim($_POST['oldName']);
            $status = $_POST['statusCate'];
            $cateModel->updateCategory($category_id, $category_name, $status);
            header("Refresh:0");
        }
        require 'pages/category/manage.php';
    }
}
