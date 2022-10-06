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
            if (isset($_POST['editSize'])) {
                $size_id = $_POST['sizeId'];
                $size = $sizeModel->getSize($size_id);
                if (!empty($_POST['changeQuantity'])) {
                    $quantity = $_POST['changeQuantity'];
                } else {
                    $quantity = $size['quantity'];
                }
                
                $status = $_POST['changeStatus'];

                $sizeModel->editSize($size_id, $quantity, $status);
                echo "<script>alert('Cập nhật thành công')</script>";
                header("Refresh:0");
            }
            if (isset($_POST['deleteSize'])) {
                $size_id = $_POST['sizeIdDelete'];
                $sizeModel->deleteSize($size_id);
                header("Refresh:0");
            }
            
        }
        
        require 'pages/product/color/manage.php';
    }
}