<?php
class ShoppingCart
{
    public function __construct()
    {
        require_once('Model/Category.php');
        require_once('Model/Color.php');
        require_once('Model/Size.php');
        require_once('Model/Cart.php');
        $cateModel = new Category();
        $colorModel = new Color();
        $sizeModel = new Size();
        $cartModel = new Cart();
        $msg = "";
        $categories = $cateModel->showAll();
        if (isset($_POST['deleteProducInCart'])) {
            $keys = array_keys($_SESSION['shoppingCart']);
            unset($_SESSION['shoppingCart'][$keys[$_POST['index']]]);
            header("Refresh:0");
        }

        if (isset($_POST['updateCart'])) {
            $size = $sizeModel->getSize($_POST['size_id']);
            if ($size['quantity'] >= $_POST['quantity']) {
                $keys = array_keys($_SESSION['shoppingCart']);
                if ($_SESSION['shoppingCart'][$keys[$_POST['index']]]['size_id'] != $_POST['size_id']) {
                    if (!empty($_SESSION['user'])) {
                        $arkey = $_SESSION['shoppingCart'][$keys[$_POST['index']]]['product_id'] . $_SESSION['shoppingCart'][$keys[$_POST['index']]]['color_id'] . $_POST['size_id'] . $_SESSION['user']['user_id'];
                    } else {
                        $arkey = $_SESSION['shoppingCart'][$keys[$_POST['index']]]['product_id'] . $_SESSION['shoppingCart'][$keys[$_POST['index']]]['color_id'] . $_POST['size_id'];
                    }
                } else {
                    $arkey = $keys[$_POST['index']];
                }
                
                $itemArray = array(
                    $arkey => array(
                        'product_id' => $_SESSION['shoppingCart'][$keys[$_POST['index']]]['product_id'],
                        'product_name' => $_SESSION['shoppingCart'][$keys[$_POST['index']]]['product_name'],
                        'image' => $_SESSION['shoppingCart'][$keys[$_POST['index']]]['image'],
                        'color_id' => $_SESSION['shoppingCart'][$keys[$_POST['index']]]['color_id'],
                        'color_name' => $_SESSION['shoppingCart'][$keys[$_POST['index']]]['color_name'],
                        'size_id' => $_POST['size_id'],
                        'size_name' => $size['size_name'],
                        'unit_price' => $_SESSION['shoppingCart'][$keys[$_POST['index']]]['unit_price'],
                        'quantity' => $_POST['quantity']
                    ),
                );
                if($arkey==$keys[$_POST['index']]){
                    unset($_SESSION["shoppingCart"][$keys[$_POST['index']]]);
                    $_SESSION["shoppingCart"] = $_SESSION["shoppingCart"] + $itemArray;
                } else {
                    $_SESSION["shoppingCart"] = $_SESSION["shoppingCart"] + $itemArray;
                }
                
                if (!empty($_SESSION['user'])) {
                    $cartModel->deleteCart($keys[$_POST['index']]);
                    $cart = $cartModel->getCart($arkey);
                        if (empty($cart)) {
                    $cartModel->addItemToCart(
                        $arkey,
                        $_SESSION['user']['user_id'],
                        $itemArray[$arkey]['product_id'],
                        $itemArray[$arkey]['color_id'],
                        $itemArray[$arkey]['size_id'],
                        $itemArray[$arkey]['unit_price'],
                        $itemArray[$arkey]['quantity']
                    );
                }
                }
                if($arkey!=$keys[$_POST['index']]){
                    unset($_SESSION["shoppingCart"][$keys[$_POST['index']]]);
                }
                header("Refresh:0");
            } else {
                $msg = "<div class='alert alert-danger'>Size " . $size['size_name'] . " ch??? c??n " . $size['quantity'] . " s???n ph???m</div>";
            }
        }
        require('View/client/pages/product/shoppingCart.php');
    }
}
