<?php
class Header {
	public function __construct()
	{
		if(isset($_GET['keyword'])){
            header('Location: ?controller=listProduct&searchValue='.$_GET['keyword']);
        }
		require('View/client/layouts/header.php');
	}
}
$header = new header();