<?php

class ManageColor
{
    public function __construct()
    {
        require_once '../../Model/Color.php';
        require_once '../../Model/Size.php';
        $colorModel = new Color();
        $sizeModel = new Size();
        if (isset($_GET['colorId'])){
            $color_id = $_GET['colorId'];
            $color = $colorModel->getColorById($color_id);
            $sizes = $colorModel->getSizeOfColor($color_id);

            if (isset($_POST['addSize'])) {
                $name = $_POST['addSizeName'];
                $quantity = $_POST['addQuantity'];

                if ($name) {
                    $sizeModel->addSize($name, $color_id, $quantity);
                    echo "<script>alert('Thêm size thành công')</script>";
                    header("Refresh:0");
                }
            }
            // if (isset($_GET['categoryId'])) {
            //     $category_id = $_GET['categoryId'];
            //     $cateModel->deleteCategory($category_id);
            //     echo "<script>confirm('Xác nhận xóa danh mục')</script>";
            //     header('Location: ?controller=manageCategory');
            // }
        }
        
        
        
        
        require 'pages/product/color/manage.php';
    }
}