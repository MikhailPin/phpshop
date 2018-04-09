<?php include ROOT . '/views/layouts/head.php'; ?>
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Поиск в продуктах</h2>
                    <div class="panel-group category-products">
                        <form action="/product_t/search" method="post">
                            <div class="form-group" style="padding: 15px;">
                                <input type="search" name="search" class="form-control">
                                <button name="submit" type="submit" class="btn btn-primary">Найти</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

<?php if (isset($productList)&& is_array($productList)): ?>
                <?php foreach($productList as $product): ?>
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p>Код товара: <?php echo $product['place']; ?></p>
                                <p>Скидка: -<?php echo $product['sales']; ?>%</p>
                                <span>
                                    <span>US $<?php echo $product['price']; ?></span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                                <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Компания:</b> <?php echo $product['company']; ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5>Описание товара</h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->
                <?php endforeach; ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>