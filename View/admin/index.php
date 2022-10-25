<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start(); /*đăng ký phiên làm việc*/
	ob_start();
	require '../../config/config.php';
	require '../../Assets/admin/lib/function.php';
	require '../../Model/Database.php';
	$db = new Database();


	if (!empty($_SESSION['useradmin']) && $_SESSION['useradmin']['role'] == admin) {
		require('layouts/header.php');
		if (isset($_GET['controller'])) {
			require '../../Route/admin/web.php';
		} else {
			require('../../Controller/admin/home.php');
		}
		require('layouts/footer.php');
	} else {
		header('Location: ../../');
	}

	$db->closeDatabase();
?>