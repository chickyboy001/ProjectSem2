<?php

class OrderDetail {
	public function __construct()
	{
        require_once('Model/Category.php');
		$cateModel = new Category();
        $categories = $cateModel->showAll();
		require('View/client/pages/account/orderDetail.php');
	}
}
?>