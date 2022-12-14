<?php
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
	session_start(); 
	ob_start();
	require 'config/config.php';
	require 'Assets/admin/lib/function.php';
	require 'Model/Database.php';
	$db = new Database();
	
	if (isset($_GET['controller'])) {
		if(strcmp($_GET['controller'], 'loginAdmin') == 0) {
			require 'View/admin/layouts/header.php';
			require 'Route/web.php';
			require 'View/admin/layouts/footer.php';
		} else {
			require 'Controller/client/header.php';
			require 'Route/web.php';
			require 'View/client/layouts/footer.php';
		}
	} else {
		require 'Controller/client/header.php';
		require('Controller/client/home.php');
		require 'View/client/layouts/footer.php';
	}
	
	$db->closeDatabase();

?>