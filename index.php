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
	
	if (isset($_GET['controller'])) {
		if(strcmp($_GET['controller'], 'loginAdmin') == 0) {
			require 'Route/web.php';
		} else {
			require 'View/client/layouts/header.php';
			require 'Route/web.php';
			require 'View/client/layouts/footer.php';
		}
	} else {
		require 'View/client/layouts/header.php';
		require('Controller/client/home.php');
		require 'View/client/layouts/footer.php';
	}
	
	$db->closeDatabase();

?>