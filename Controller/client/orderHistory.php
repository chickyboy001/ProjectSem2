<?php

class OrderHistory {
	public function __construct()
	{
        require_once('Model/Category.php');
        require_once('Model/Order.php');
		$cateModel = new Category();
        $orderModel = new Order();
        $categories = $cateModel->showAll();
		if(!empty($_SESSION['user'])){
            $orders = $orderModel->getOrderByCustomerId($_SESSION['user']['user_id']);
            require('View/client/pages/account/orderHistory.php');
        } else {
            header('Location: ?controller=loginClient');
        }
	}
}
?>