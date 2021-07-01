<?php
    return array(

        'product/([0-9]+)' => 'product/view/$1', //actionView in ProductController

        'catalog' => 'catalog/index', //actionIndex in CatalogController

        'category/([0-9]+)/page-([0-9]+)'=> 'catalog/category/$1/$2', //PAG actionCategory in CatalogController
        'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController

        'user/register' => 'user/register', //actionRegister in UserController
        'user/login' => 'user/login', //actionLogin in UserController

        'cabinet' => 'cabinet/index', //actionIndex in CabinetController

        '' => 'site/index', //actionIndex in SiteController
);