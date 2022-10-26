<?php
class CheckOut
{
    public function __construct()
    {
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
        if (isset($_POST['confirmOrder'])) {
            $msg = '';
            $result = false;
            foreach ($_SESSION['shoppingCart'] as $shoppingCart) {
                $size_id = $shoppingCart['size_id'];
                $quantity = $shoppingCart['quantity'];
                $size = $sizeModel->getSize($size_id);
                if ($size['quantity'] - $quantity >= 0) {
                    $result = true;
                } else {
                    $result = false;
                    break;
                }
            }
            if ($result == true) {

                $fullname = trim($_POST['fullname']);

                $phone = trim($_POST['phone']);

                $address = trim($_POST['address']);

                $email = trim($_POST['email']);

                $payment_method = $_POST['payment_method'];
                $total_price = $_POST['total_price'];
                $cus = $accModel->checkExistCustomer($fullname, $email, $phone, $address);
                // kiểm tra thông tin khách hàng đã nhập có trong database chưa
                // nếu chưa có thì tạo khách hàng mới
                $sub_customer = NULL;
                if (empty($cus)) {
                    $sub_customer = $accModel->addCustomer($fullname, $address, $phone, $email);
                } else if (!empty($_SESSION['user'])) {
                    if ($cus['user_id'] != $_SESSION['user']['user_id']) {
                        // nếu đã có thì kiểm tra xem có trùng với session k, nếu không thì thêm vào sub_customer
                        $sub_customer = $cus['user_id'];
                    }
                }
                if (!empty($_SESSION['user']) && !empty($sub_customer)) {
                    // tạo đơn hàng mới với sub_customer
                    $new_order = $orderModel->addOrderWithSub_customer($_SESSION['user']['user_id'], $payment_method, $sub_customer, $total_price);
                }
                // tạo đơn hàng mới với khách hàng mới
                if (empty($_SESSION['user'])) {
                    $new_order = $orderModel->addOrder($sub_customer, $payment_method, $total_price);
                }
                if (!empty($_SESSION['user'])) {
                    if ($cus['user_id'] == $_SESSION['user']['user_id']) {
                        // tạo đơn hàng mới với session
                        $new_order = $orderModel->addOrder($_SESSION['user']['user_id'], $payment_method, $total_price);
                    }
                }
                foreach ($_SESSION['shoppingCart'] as $shoppingCart) {
                    $product_id = $shoppingCart['product_id'];
                    $color_name = $shoppingCart['color_name'];
                    $size_name = $shoppingCart['size_name'];
                    $size_id = $shoppingCart['size_id'];
                    $unit_price = $shoppingCart['unit_price'];
                    $quantity = $shoppingCart['quantity'];
                    $productModel->addProductToOrder($new_order, $product_id, $color_name, $size_name, $unit_price, $quantity);
                    $sizeModel->updateQuantityAfterCreateOrder($quantity, $size_id);
                }
                if (!empty($_SESSION['user'])) {
                    $cartModel->deleteAllCart($_SESSION['user']['user_id']);
                }
                unset($_SESSION['shoppingCart']);
                header('Location: ?controller=orderSuccessfull');
            } else {
                header('Location: ?controller=orderFail');
            }
        }
        require('View/client/pages/product/checkout.php');
    }
}
