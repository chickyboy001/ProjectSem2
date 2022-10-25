<?php
class OrderSuccessfull
{
	public function __construct()
	{
		require_once('Model/Category.php');
		require_once('Model/Order.php');
		$cateModel = new Category();
		$orderModel = new Order();
		$categories = $cateModel->showAll();
		
		require('View/client/pages/product/orderSuccessfull.php');
		
	}
}
