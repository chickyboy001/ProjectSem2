<?php
class ShowOrder {
	public function __construct()
	{
		require('../../Model/Order.php');
        require('../../Model/Account.php');
		$orderModel = new Order();
        $accModel = new Account();
		$orders = $orderModel->showAll();
		
		require('pages/order/showAll.php');
	}
}
?>