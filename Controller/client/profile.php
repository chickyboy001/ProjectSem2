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
		if (!empty($_SESSION['user'])) {
			require('View/client/pages/account/profile.php');
		} else {
			header('Location: ?controller=loginClient');
		}
	}
}
