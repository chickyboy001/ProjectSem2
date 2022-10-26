<?php
class ProductPage
{
    public function __construct()
    {
        require_once('Model/Product.php');
        require_once('Model/Color.php');
        require_once('Model/Size.php');
        require_once('Model/Category.php');
        require_once('Model/Cart.php');
        $productModel = new Product();
        $colorModel = new Color();
        $sizeModel = new Size();
        $cateModel = new Category();
        $cartModel = new Cart();
        $categories = $cateModel->showAll();
        // unset($_SESSION['shoppingCart']);
        // print_r($_SESSION['shoppingCart']);
        if (isset($_GET['productId'])) {
            $product_id = $_GET['productId'];
            $product = $productModel->getProduct($product_id);
            $colors = $productModel->getColorOfProduct($product_id);

            if (isset($_POST['buyNow'])) {
                $itemArray = array(
                    $arkey => array(
                        'product_id' => $_POST['productId'],
                        'product_name' => $_POST['productName'],
                        'image' => $_POST['image'],
                        'color_id' => $_POST['colorId'],
                        'color_name' => $_POST['colorName'],
                        'size_id' => $_POST['sizeId'],
                        'size_name' => $size['size_name'],
                        'unit_price' => $_POST['unit_price'],
                        'quantity' => $_POST['quantity']
                    ),
                );
            }

            if (isset($_POST['addToCart'])) {
                unset($itemArray);
                $size = $sizeModel->getSize($_POST['sizeId']);
                if (!empty($_SESSION['user'])) {
                    $arkey = $_POST['productId'] . $_POST['colorId'] . $_POST['sizeId'] . $_SESSION['user']['user_id'];
                } else {
                    $arkey = $_POST['productId'] . $_POST['colorId'] . $_POST['sizeId'];
                }

                $itemArray = array(
                    $arkey => array(
                        'product_id' => $_POST['productId'],
                        'product_name' => $_POST['productName'],
                        'image' => $_POST['image'],
                        'color_id' => $_POST['colorId'],
                        'color_name' => $_POST['colorName'],
                        'size_id' => $_POST['sizeId'],
                        'size_name' => $size['size_name'],
                        'unit_price' => $_POST['unit_price'],
                        'quantity' => $_POST['quantity']
                    ),
                );
                if (!empty($_SESSION['shoppingCart'])) {
                    if (in_array($arkey, array_keys($_SESSION["shoppingCart"]))) {
                        foreach ($_SESSION["shoppingCart"] as $k => $v) {
                            if ($arkey == $k) {
                                if (empty($_SESSION["shoppingCart"][$k]["quantity"])) {
                                    $_SESSION["shoppingCart"][$k]["quantity"] = 0;
                                }
                                $_SESSION["shoppingCart"][$k]["quantity"] += $_POST['quantity'];
                                if (!empty($_SESSION['user'])) {
                                    $cart = $cartModel->getCart($arkey);
                                    if (empty($cart)) {
                                        $cartModel->editCart($arkey, $_SESSION["shoppingCart"][$k]["quantity"]);
                                    }
                                }
                            }
                        }
                    } else {
                        $_SESSION["shoppingCart"] = $_SESSION["shoppingCart"] + $itemArray;
                        if (!empty($_SESSION['user'])) {
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
                    }
                } else {
                    $_SESSION['shoppingCart'] = $itemArray;
                    if (!empty($_SESSION['user'])) {
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
                }
                header("Refresh:0");
            }
            require('View/client/pages/product/productPage.php');
        }
    }
}
