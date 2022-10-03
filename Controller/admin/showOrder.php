<?php
class ShowOrder {
	public function __construct()
	{
		require('../../Model/Order.php');
        require('../../Model/Account.php');
		$orderModel = new Order();
        $accModel = new Account();
		$orders = $orderModel->showAll();
		if (isset($_POST['editOrder'])) {
			$order_id= $_POST['orderId'];
			$admin_id = $_POST['adminId'];
			$status = $_POST['updateStatus'];
			$orderModel->updateStatus($order_id,$admin_id, $status);
			header("Refresh:0");
		}
		require('pages/order/showAll.php');
	}
}
?>