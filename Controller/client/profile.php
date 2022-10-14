<?php
class Profile
{
	public function __construct()
	{
		require_once('Model/Category.php');
		require_once('Model/Order.php');
		$cateModel = new Category();
		$orderModel = new Order();
		$categories = $cateModel->showAll();
		$userId = $_SESSION['user']['user_id'];
		$orders = $orderModel->getOrderOfCustomer($userId);
		if (!empty($_SESSION['user'])) {
			if (isset($_POST['editProfile'])) {

				if (isset($_POST['fullname'])) {
					$fullname = trim($_POST['fullname']);
				} else {
					$fullname = $_SESSION['user']['fullname'];
				}
				if (isset($_POST['address'])) {
					$address = trim($_POST['address']);
				} else {
					$address = $_SESSION['user']['address'];
				}
				if (isset($_POST['phone'])) {
					$phone = trim($_POST['phone']);
				} else {
					$phone = $_SESSION['user']['phone'];
				}
				if (isset($_POST['email'])) {
					$email = trim($_POST['email']);
				} else {
					$email = $_SESSION['user']['email'];
				}

				$checkPhone = $accModel->checkExistPhone($phone);

				if ($checkPhone->num_rows > 0) {
					echo "<script>alert('Số điện thoại đã tồn tại')</script>";
				} else {
					$accModel->editProfile($userId, $fullname, $address, $phone, $email);
					echo "<script>alert('Cập nhật thông tin thành công')</script>";
				}
			}
			require('View/client/pages/account/profile.php');
		} else {
			header('Location: ?controller=loginClient');
		}
	}
}
