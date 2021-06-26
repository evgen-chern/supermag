<?php
//AUTOLOAD
class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        require_once (FILEPLACE . '/views/site/index.php');
        return true;
    }
}