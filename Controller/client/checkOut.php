<?php
class CheckOut {
    public function __construct() {
        require_once('Model/Category.php');
        require_once('Model/Order.php');
        require_once('Model/Account.php');
        require_once('Model/Product.php');
        require_once('Model/Cart.php');
        require_once('Model/Size.php');
        $accModel = new Account();
        $orderModel = new Order();
        $cateModel = new Category();
        $productModel = new Product();
        $cartModel = new Cart();
        $sizeModel = new Size();
		$categories = $cateModel->showAll();
        if(isset($_POST['confirmOrder'])){
            $msg = '';
            $result = false;
            foreach($_SESSION['shoppingCart'] as $shoppingCart){
                $size_id = $shoppingCart['size_id'];
                $quantity = $shoppingCart['quantity'];
                $size = $sizeModel->getSize($size_id);
                if($size['quantity'] - $quantity >= 0){
                    $result = true;
                } else {
                    $result = false;
                    break;
                }
            }
            if($result ==true){
            if (!empty($_POST['fullname']) && strcasecmp($_POST['fullname'],$_SESSION['user']['fullname'])==0){
                $fullname = trim($_POST['fullname']);
            }
            if (!empty($_POST['phone']) && strcasecmp($_POST['phone'],$_SESSION['user']['phone'])==0){
                $phone = trim($_POST['phone']);
            }
            if (!empty($_POST['address']) && strcasecmp($_POST['address'],$_SESSION['user']['address'])==0){
                $address = trim($_POST['address']);
            }
            if (!empty($_POST['email']) && strcasecmp($_POST['email'],$_SESSION['user']['email'])==0){
                $email = trim($_POST['email']);
            }
            $payment_method = $_POST['payment_method'];
            $total_price = $_POST['total_price'];
            // xử lý trường hợp khách nhập thiếu trường
            if(isset($fullname) || isset($phone) || isset($address)) {
                $sub_customer = $accModel->addCustomer($fullname, $address, $phone, $email);
                if(!empty($_SESSION['user'])){
                    $new_order = $orderModel->addOrderWithSub_customer($_SESSION['user']['user_id'], $payment_method, $sub_customer, $total_price);
                } else {
                    $new_order = $orderModel->addOrder($sub_customer, $payment_method, $total_price);
                }
            } else {
                $new_order = $orderModel->addOrder($_SESSION['user']['user_id'], $payment_method, $total_price);
            }
            foreach($_SESSION['shoppingCart'] as $shoppingCart){
                $product_id = $shoppingCart['product_id'];
                $color_name = $shoppingCart['color_name'];
                $size_name = $shoppingCart['size_name'];
                $size_id = $shoppingCart['size_id'];
                $unit_price = $shoppingCart['unit_price'];
                $quantity = $shoppingCart['quantity'];
                $productModel->addProductToOrder($new_order, $product_id, $color_name, $size_name, $unit_price, $quantity);
                $sizeModel->updateQuantityAfterCreateOrder($quantity, $size_id);
            }
            $cartModel->deleteAllCart($_SESSION['user']['user_id']);
            unset($_SESSION['shoppingCart']);
            header('Location: ?controller=orderSuccessfull');
        } else{
            header('Location: ?controller=orderFail');
        }
        }
        require('View/client/pages/product/checkout.php');
    }
} 
?>