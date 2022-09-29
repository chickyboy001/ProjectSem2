<?php
class OrderDetail {
	public function __construct()
	{
		require('../../Model/Order.php');
		$orderModel = new Order();
        if (isset($_GET['orderId'])) {
			$order_id = $_GET['orderId'];
			$order = $orderModel->getOrder($order_id);
            $products = $orderModel->getProductInOrder($order_id);
			require('pages/order/detail.php');
		}
		
	}
}
?>