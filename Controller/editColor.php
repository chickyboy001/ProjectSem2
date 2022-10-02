<?php
class EditColor
{
    public function __construct()
    {
        require '../../Model/Color.php';
        $colorModel = new Color();
        
        if (isset($_POST['submit'])) {

            $color_id = $_GET['colorId'];
            $color = $colorModel->GetColorById($color_id);
            if (isset($_POST['newColorName'])) {
                $color_name = trim($_POST['newColorName']);
                $slug = changeTitle($color_name);
            } else {
                $color_name  = $color['color_name'];
            }


            // Ảnh chính
            if (!isset($_FILES['image_link'])) {
                $image_link = $color['image_link'];
            } else if (isset($_FILES['image_link']) && $_FILES['image_link']['error'] > 0) {
                $ext = pathinfo($_FILES['image_link']['name'], PATHINFO_EXTENSION);
                $image_link = $slug . '.' . $ext;
                if (!file_exists('../../Public/admin/upload/posts/. $image_link')) {
                    move_uploaded_file($_FILES['image_link']['tmp_name'], '../../Public/admin/upload/products/' . $image_link);
                } else {
                    $image_link = $color['image_link'];
                }
            }

            // Ảnh phụ: TH1: không tải lên bất cứ ảnh nào
            if (!isset($_FILES['image_link_extra'])) {
                for ($i = 1; $i < 5; $i++) {
                    $image_link_[$i] = $color['image_link_[$i]'];
                }
                // TH2: có tải ảnh lên
            } else if (isset($_FILES['image_link_extra']) && $_FILES['image_link_extra']['error'] > 0) {
                $count = 0;
                foreach ($_FILES['image_link_extra']['tmp_name'] as $key => $value) {
                    $image_link_[$count] = NULL;
                    // TH phụ 1: ảnh tải lên mới hoàn toàn
                    $ext = pathinfo($_FILES['image_link_extra']['name'][$key], PATHINFO_EXTENSION);
                    $image_link_[$count] = $slug . '.' . $ext;
                    if (!file_exists('../../Public/admin/upload/products/' . $image_link_[$count])) {
                        move_uploaded_file($_FILES['image_link_extra']['tmp_name'][$key], '../../Public/admin/upload/products/' . $image_link_[$count]);
                    } else {
                        // TH phụ 2: ảnh tải lên trùng với ảnh có sẵn
                        $image_link_[$count] = $color['image_link_' . [$count]];
                    }
                    $count++;
                }
            }
        }
        $colorModel->editColor($color_id, $color_name, $image_link, $image_link_1, $image_link_2, $image_link_3, $image_link_4);
        header("Refresh:0");
    }
}