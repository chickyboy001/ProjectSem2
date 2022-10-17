<?php
class EditProfile {
	public function __construct()
	{
        require_once('Model/Category.php');
		require_once('Model/Account.php');
		$cateModel = new Category();
		$accModel = new Account();
        $categories = $cateModel->showAll();
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
					$accModel->editProfile($_SESSION['user']['user_id'], $fullname, $phone, $address, $email);
					header('Location: ?controller=profile');
				
			}
			require('View/client/pages/account/editProfile.php');
		} else {
			header('Location: ?controller=loginClient');
		}
		
	}
}
