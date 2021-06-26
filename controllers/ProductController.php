<?php
//AUTOLOAD
class ProductController
{
    public function actionView($id)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductByid($id);

        require_once (FILEPLACE . '/views/product/view.php');

        return true;
    }
}