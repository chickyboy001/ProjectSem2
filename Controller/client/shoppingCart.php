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
        unset($_SESSION['shoppingCart']);
        $_SESSION['shoppingCart']= array(
            0 => array(
                'product_id' => 1,
                'product_name' => 'Áo thun nữ',
                'image' => 'ezgif-5-9b70b8b517.jpg',
                'color_id' => 1,
                'color_name' => 'đen',
                'size_id' => 9,
                'size_name' => 'XL',
                'unit_price' => '240000',
                'quantity' => 1
            ),
            
        );
        if(isset($_POST['deleteProducInCart'])){
            unset($_SESSION['shoppingCart'][$_POST['index']]);
            header("Refresh:0");
        }
        
        require('View/client/pages/product/shoppingCart.php');
    }
} 
?>