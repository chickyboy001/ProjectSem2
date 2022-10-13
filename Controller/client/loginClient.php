<?php
class LoginClient
{
	public function __construct()
	{
		require_once('Model/Account.php');
		require_once('Model/Category.php');
		$accModel = new Account();
		$cateModel = new Category();
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
					header('Location: ./');
				} else {
					echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
				}
			}
		}
		require('View/client/pages/account/loginClient.php');
	}
}
