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
			$fullname = trim($_POST['fullname']);
			$address = trim($_POST['address']);
			$phone = trim($_POST['phone']);
			$password = md5($_POST['password']);

			if ($username && $password && $address && $phone && $fullname) {
				$checkUsername = $accModel->checkExistUsername($username);

				if ($checkUsername->num_rows > 0) {
					echo "<script>alert('Tên đăng nhập đã tồn tại')</script>";
				} else {
					$accModel->signup($username, $address, $phone, $password);
					echo "<script>alert('Đăng ký thành công')</script>";
				}
			}
		}
		require('View/client/pages/account/register.php');
	}

	
}