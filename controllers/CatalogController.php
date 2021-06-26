<?php
//AUTOLOAD
class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);

        require_once (FILEPLACE . '/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId, $page=1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId,$page);

        //TOTAL FOR PAGINATION
        $total = Product::getTotalProductsInCategory($categoryId);

        //CREATE OBJECT PAGINATION
        $pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');

        require_once (FILEPLACE . '/views/catalog/category.php');

        return true;
    }
}