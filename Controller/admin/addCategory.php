<?php

class AddCategory {
	public function __construct()
	{
		require_once('../../Model/Category.php');
		$cateModel = new Category();
		$categories = $cateModel->showAll();
		$name = $slug = NULL;
		$alert = array();
		if (isset($_POST['addCategory'])) {
			$name = $_POST['name'];
			$slug = changeTitle($name);

			if ($name) {
				$cateModel->addCategory($name, $slug);
				$alert['success'] = 'Thêm thành công';
			}
		}
		require('pages/category/manage.php');
	}
}
?>