<?php
class HomePage {
	public function __construct()
	{
		require_once('Model/Product.php');
		require_once('Model/Category.php');
		require_once('Model/Color.php');
		require_once('Model/Size.php');
        require_once('Model/Account.php');
		$productModel = new Product();
		$cateModel = new Category();
		$colorModel = new Color();
		$sizeModel = new Size();
        $accModel = new Account();
		$products = $productModel->showAll();
		$categories = $cateModel->showAll();
		if (isset($_POST['productId'])) {
			$product_id = $_POST['productId'];
			$product = $productModel->getProduct($product_id);

			if (isset($_POST['editProduct'])) {
				if (!empty($_POST['product_name'])) {
					$product_name = trim($_POST['product_name']);
				} else {
					$product_name = $product['product_name'];
				}
				
				if (!empty($_POST['sex'])) {
					$sex = $_POST['sex'];
				} else {
					$sex = $product['sex'];
				}

				if (!empty($_POST['price'])) {
					$price = trim($_POST['price']);
				} else {
					$price = $product['price'];
				}
				
				if (!empty($_POST['category_id'])) {
					$category_id = $_POST['category_id'];
				} else {
					$category_id = $product['category_id'];
				}
				if (!empty($_POST['description'])) {
					$description = $_POST['description'];
				} else {
					$description = $product['description'];
				}

				$status = $_POST['productStatus'];
				
				$productModel->editProduct($product_id, $product_name, $category_id, $sex, $price,$description, $status);
				echo "<script>alert('Thay đổi thuộc tính sản phẩm thành công')</script>";
				header('Location: ?controller=productDetail&productId='.$product_id);
			}
			
		}
		
		require('View/client/pages/product/showAll.php');
	}
}