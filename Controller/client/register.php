<?php

class Register {
	public function __construct()
	{
		require_once('Model/Account.php');
		require_once('Model/Category.php');
		$accModel = new Account();
		$cateModel = new Category();
		$categories = $cateModel->showAll();

		$msg = "";;
		if (isset($_POST['register'])) {

			if (empty($_POST['username']) || empty($_POST['fullname']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['password']) || empty($_POST['password2'])) {
				$msg = "<div class='alert alert-danger'>Tất cả các trường không được để trống</div>";
			}
			
			$username = trim($_POST['username']);
			$fullname = trim($_POST['fullname']);
			$address = trim($_POST['address']);
			$phone = trim($_POST['phone']);
			$password = md5($_POST['password']);

			if ($username && $password && $address && $phone && $fullname) {
				$checkUsername = $accModel->checkExistUsername($username);

				if ($checkUsername->num_rows > 0) {
					$msg = "<div class='alert alert-danger'>Tên đăng nhập đã tồn tại.</div>";
				} else {
					$accModel->signup($username, $fullname, $address, $phone, $password);
					echo "<script>alert('Đăng ký thành công')</script>";
					header('Location: ?controller=loginClient');
				}
			}
		}
		require('View/client/pages/account/register.php');
	}

	
}