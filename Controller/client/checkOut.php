<?php
class CheckOut {
    public function __construct() {
        require_once('Model/Category.php');
        $cateModel = new Category();
		$categories = $cateModel->showAll();
        
        require('View/client/pages/product/checkout.php');
    }
} 
?>