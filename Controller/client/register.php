<?php

class Register {
	public function __construct()
	{
		require_once('Model/Account.php');
		require_once('Model/Category.php');
		$accModel = new Account();
		$cateModel = new Category();
		$categories = $cateModel->showAll();
		if (isset($_POST['register'])) {
			
			$username = trim($_POST['username']);
			$address = trim($_POST['address']);
			$phone = trim($_POST['phone']);
			$password = md5($_POST['password']);

			if ($username && $password && $address && $phone) {
				$checkUsername = $accModel->checkExistUsername($username);
				$checkPhone = $accModel->checkExistPhone($phone);

				if ($checkUsername->num_rows > 0) {
					echo "<script>alert('Tên đăng nhập đã tồn tại')</script>";
				}	else if($checkPhone->num_rows > 0) {
					echo "<script>alert('Số điện thoại đã tồn tại')</script>";
				} else {
					$accModel->signup($username, $address, $phone, $password);
					echo "<script>alert('đăng ký thành công')</script>";
				}
			}
		}
		require('View/client/pages/account/register.php');
	}

	
}