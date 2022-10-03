<?php
class ProductDetail
{
	public function __construct()
	{
		require('../../Model/Product.php');
		require('../../Model/Color.php');
		$productModel = new Product();
		$colorModel = new Color();
		if (isset($_GET['productId'])) {
			$product_id = $_GET['productId'];
			$product = $productModel->getProduct($product_id);
			$colors = $productModel->getColorOfProduct($product_id);

			if (isset($_POST['editColor'])) {

				$color_id = $_POST['colorId'];
				echo var_dump($color_id);
				$color = $colorModel->GetColorById($color_id);
				if (!empty($_POST['newColorName'])) {
					$color_name = trim($_POST['newColorName']);
					$slug = changeTitle($color_name);
				} else {
					$color_name  = $color['color_name'];
					$slug = changeTitle($color_name);
				}
				
				// Nếu không tải ảnh mới lên thì đặt giá trị như ban đầu
	        	// Ngược lại thì lấy tên ảnh và lưu vào Public/admin/upload/products
				if (!empty($_FILES['image_link']) && $_FILES['image_link']['error'] > 0) {
					$image_link = $color['image_link'];
				} else {
					$image_link = $_FILES['image_link']['name'];
					if (!file_exists('../../Public/admin/upload/products/' . $image_link)) {
						move_uploaded_file($_FILES['image_link']['tmp_name'], '../../Public/admin/upload/products/' . $image_link);
					}
				}

				// gắn cho temp[] giá trị ban đầu của các image_link
				$temp = array($color['image_link_1'], $color['image_link_2'], $color['image_link_3'], $color['image_link_4']);
				// Nếu tên của phần tử đầu tiên không tồn tại thì cho nó bằng Null, $_FILE['image_link_extra']['name'] có count bằng 1
				// không rõ lý do kể cả khi không có phần tử nào nên phải làm thế
				if(empty($_FILES['image_link_extra']['name'][0])){
					$_FILES['image_link_extra'] = NULL;
				}
				
				if (!empty($_FILES['image_link_extra']) && $_FILES['image_link_extra']['error'] > 0) {
					$count = count($_FILES['image_link_extra']['name']);
					for ($i = 0; $i < $count; $i++) {
						$temp[$i] = $_FILES['image_link_extra']['name'][$i];
						if (!file_exists('../../Public/admin/upload/products/' . $temp[$i])) {
							// Nếu ảnh tải lên chưa từng dược lưu thì chuyển ảnh vào thư mục upload
							move_uploaded_file($_FILES['image_link_extra']['tmp_name'][$i], '../../Public/admin/upload/products/' . $temp[$i]);
						}
					}

				}
				
				
				$status = $_POST['status'];
				$colorModel->editColor($color_id, $color_name, $image_link, $temp[0], $temp[1], $temp[2], $temp[3], $status);
				header("Refresh:0");
			}
			

			require('pages/product/detail.php');
		}
	}
}