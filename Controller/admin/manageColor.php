<?php

class ManageColor
{
    public function __construct()
    {
        require_once '../../Model/Color.php';
        $colorModel = new Color();
        
        if (isset($_POST['addCategoryName'])) {
            $name = ucfirst($_POST['CategoryName']);

            if ($name) {
                $cateModel->addCategory($name);
                echo "<script>alert('Thêm danh mục thành công')</script>";
                header("Refresh:0");
            }
        }
        if (isset($_GET['categoryId'])) {
			$category_id = $_GET['categoryId'];
			$cateModel->deleteCategory($category_id);
			echo "<script>confirm('Xác nhận xóa danh mục')</script>";
			header('Location: ?controller=manageCategory');
		}
        require 'pages/category/manage.php';
    }
}