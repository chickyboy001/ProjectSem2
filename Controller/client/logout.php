<?php

class Logout {
	public function __construct()
	{
		unset($_SESSION['user']);
		unset($_SESSION['shoppingCart']); 
		header('Location: ?controller=loginClient'); 
	}
}
$logout = new Logout();