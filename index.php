<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start(); 
	ob_start();
	require 'Config/config.php';
	require 'Assets/admin/lib/function.php';
	require 'Model/Database.php';
	$db = new Database();

	require 'View/client/layouts/header.php'; /*giao diện header*/

	if (isset($_GET['controller'])) {
		require 'Route/web.php'; /*xử lý các request trong Route/web.php*/
	} else {
		require('Controller/client/home.php');
		// require 'View/client/pages/home.php'; /*require giao diện trang chủ*/
	}

	require 'View/client/layouts/footer.php'; /*giao diện footer*/

	$db->closeDatabase();

?>