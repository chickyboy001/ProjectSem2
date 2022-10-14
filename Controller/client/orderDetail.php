<?php

class OrderDetail {
	public function __construct()
	{
        require_once('Model/Order.php');
        require_once('Model/Category.php');
		$cateModel = new Category();
        $categories = $cateModel->showAll();
		$orderModel = new Order();
        if(!empty($_SESSION['user'])){
            if (isset($_GET['orderId'])) {
                $order_id = $_GET['orderId'];
                $order = $orderModel->getOrder($order_id);
                $products = $orderModel->getProductInOrder($order_id);
                require('View/client/pages/account/orderDetail.php');
            }
        } else {
            header('Location: ?controller=loginClient');
        }
	}
}
?>