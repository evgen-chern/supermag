<?php


class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        //EMPTY ARRAY FOR ITEMS IN CART
        $productsInCart = array();

        //IF CART NO EMPTY THEN ITEMS SAVES IN SESSION
        if(isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        //IF ISSET +1
        if(array_key_exists($id,$productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

    public static function countItems()
    {
        if(isset($_SESSION['products'])){
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        if(isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        if($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

}