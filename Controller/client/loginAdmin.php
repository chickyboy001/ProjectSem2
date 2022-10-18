<?php
class LoginAdmin
{
	public function __construct()
	{
		require_once('Model/Account.php');
		$accModel = new Account();
		$username = $password = NULL;
		if (empty($_SESSION['useradmin'])) {
			if (isset($_POST['loginAdmin'])) {
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				if ($username && $password) {
					$result = $accModel->login($username, $password);
					$check = $result->num_rows;
					if ($check > 0) {
						$data = $result->fetch_array();
						$_SESSION['useradmin'] = $data;
						if ($data['role'] == admin) {
							header('Location: View/admin');
						} else {
							echo "<script>alert('Tài khoản không phải admin')</script>";
						}
					} else {
						echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
					}
				}
			}
		} else {
			header('Location: View/admin');
		}
		require('View/client/pages/account/loginAdmin.php');
	}
}
