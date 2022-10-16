<?php
class LoginClient
{
	public function __construct()
	{
		require_once('Model/Account.php');
		require_once('Model/Category.php');
		require_once('Model/Cart.php');
		$accModel = new Account();
		$cateModel = new Category();
		$cartModel = new Cart();
		$categories = $cateModel->showAll();
		$username = $password = NULL;

		if (isset($_POST['login'])) {

			$username = $_POST['username'];
			$password = md5($_POST['password']);

			if ($username && $password) {
				$result = $accModel->login($username, $password);

				$check = $result->num_rows;
				if ($check > 0) {
					$data = $result->fetch_array();
					$_SESSION['user'] = $data;
					$cartItems = $cartModel->getCartOfCustomer($_SESSION['user']['user_id']);
					unset($_SESSION['shoppingCart']);
					if (!empty($cartItems)) {
						foreach ($cartItems as $cartItem) {
							unset($itemArray);
							$itemArray = array(
								$cartItem['cart_id'] => array(
									'product_id' => $cartItem['product_id'],
									'product_name' => $cartItem['product_name'],
									'image' => $cartItem['image_link'],
									'color_id' => $cartItem['color_id'],
									'color_name' => $cartItem['color_name'],
									'size_id' => $cartItem['cart_id'],
									'size_name' => $cartItem['size_name'],
									'unit_price' => $cartItem['unit_price'],
									'quantity' => $cartItem['quantity'],
								),
							);
							if (!empty($_SESSION['shoppingCart'])) {
								$_SESSION['shoppingCart'] = $_SESSION["shoppingCart"]+$itemArray;
							} else {
								$_SESSION['shoppingCart'] = $itemArray;
							}
						}
					}
					header('Location: ./');
				} else {
					echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
				}
			}
		}
		require('View/client/pages/account/loginClient.php');
	}
}
