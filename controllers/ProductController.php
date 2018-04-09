<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для страницы просмотра товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);

        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

    public function actionSearchAjax($product){

         $product = Product::getSameProducts($product);

        return $product;
    }

    public function actionSearch(){

        $productList = false;
        $product = false;
        if (isset($_POST['submit'])) {
            $product = $_POST["search"];
            $productList = Product::getSameProducts($product);

        }
        $errors = false;

        // Валидируем значения
        if ($productList==null) {
            $errors[] = "В поиске ничего не найдено по запросу [$product]";
        }

        require_once(ROOT . '/views/product/search.php');
        return true;

     }
}
