<?php
class ListProduct {
	public function __construct()
	{
        require_once('Model/Order.php');
        require_once('Model/Product.php');
        require_once('Model/Category.php');
		$cateModel = new Category();
        $productModel = new Product();
        $categories = $cateModel->showAll();
		$orderModel = new Order();
        if(isset($_GET['category_id'])){
            $products = $productModel->getProductByCategory($_GET['category_id']);
        }
            if (isset($_GET['orderId'])) {
                $order_id = $_GET['orderId'];
                $order = $orderModel->getOrder($order_id);
                $products = $orderModel->getProductInOrder($order_id);
                require('View/client/pages/account/orderDetail.php');
            }
	}
}
?>