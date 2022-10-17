<?php
class ShoppingCart{
    public function __construct() {
        require_once('Model/Category.php');
        require_once('Model/Color.php');
		require_once('Model/Size.php');
        $cateModel = new Category();
        $colorModel = new Color();
		$sizeModel = new Size();
		$categories = $cateModel->showAll();
        if(isset($_POST['deleteProducInCart'])){
            unset($_SESSION['shoppingCart'][$_POST['index']]);
            header("Refresh:0");
        }
        
        require('View/client/pages/product/shoppingCart.php');
    }
} 
?>