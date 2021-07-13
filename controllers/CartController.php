<?php


class CartController
{
    public function actionAdd($id)
    {
        //ADD TO CART
        Cart::addProduct($id);

        //RELOCATE BACK
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        //ADD TO CART
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        //GET DATA FROM CART
        $productsInCart = Cart::getProducts();

        if($productsInCart) {
            //ALL INFORMATION
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            //ALL PRICE
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once (FILEPLACE . '/views/cart/index.php');
        return true;
    }
}