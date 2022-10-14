<?php

class OrderHistory {
	public function __construct()
	{
        require_once('Model/Category.php');
		$cateModel = new Category();
        $categories = $cateModel->showAll();
		
		if(!empty($_SESSION['user'])){
            require('View/client/pages/account/orderHistory.php');
        } else {
            header('Location: ?controller=loginClient');
        }
	}
}
?>