<?php

return array(
    // Товар:
    'product_p/search/ajax/([0-9а-яА-Яa-zA-Z]+)' => 'product/searchAjax/$1', // actionView в ProductController
    'product_t/search' => 'product/search', // actionView в ProductController
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    // Каталог:
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    // Корзина:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
	'user/passwordRecover' => 'user/passwordRecover',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
         // Управление blog:    
    'admin/blog/create' => 'adminBlog/create',
    'admin/blog/update/([0-9]+)' => 'adminBlog/update/$1',
    'admin/blog/delete/([0-9]+)' => 'adminBlog/delete/$1',
    'admin/blog' => 'adminBlog/index',
    // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Админпанель:
    'admin' => 'admin/index',
    // О магазине
    'contacts' => 'site/contact',
    'about' => 'site/about',
       'blog/([0-9]+)' => 'blog/view/$1', //actionIndex to NewsController
    // Вывод всех новостей
    'blog' => 'blog/index', //actionIndex to NewsController
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
    
   
);
