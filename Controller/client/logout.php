<?php

class Logout {
	public function __construct()
	{
		unset($_SESSION['user']); 
		header('Location: ?controller=loginClient'); 
	}
}
$logout = new Logout();