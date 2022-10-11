<?php
class Home {
	public function __construct()
	{
		require_once('../../Model/Product.php');
		require_once('../../Model/Color.php');
		require_once('../../Model/Size.php');
        require_once('../../Model/Account.php');
		require_once('../../Model/Category.php');
        require_once('../../Model/Order.php');
		$cateModel = new Category();
		$productModel = new Product();
		$colorModel = new Color();
		$sizeModel = new Size();
        $orderModel = new Order();
        $accModel = new Account();
        $orders = $orderModel->getLatestOrder();
        $orderTodays = $orderModel->getOrderToday();
        $countNewOrder = count($orderTodays, COUNT_NORMAL);
        $revenue = 0;
        if($countNewOrder > 0){
            foreach ($orderTodays as $orderToday) {
                $products = $orderModel->getProductInOrder($orderToday['order_id']);
                foreach ($products as $product) {
                    $revenue = $revenue + $product['price'];
                }
            }
        }
		if (isset($_POST['editOrder'])) {
			$order_id= $_POST['orderId'];
			$admin_id = $_POST['adminId'];
			$status = $_POST['updateStatus'];
			$orderModel->updateStatus($order_id,$admin_id, $status);
			header("Refresh:0");
		}

		require('pages/home.php');
	}
}
$home = new Home();