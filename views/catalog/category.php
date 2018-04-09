<?php include ROOT . '/views/layouts/head.php'; ?>
<body class="catalog">
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                           >                                                                                    
                                               <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->

                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="product-item">
                            <div class="product-image">
                                <div class="sticks">
                                    <div class="stick">- 18%</div>
                                </div>
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><?php echo $product['name'];?></h3>
                                <div class="product-flex flex">
                                    <p class="product-desc">Название компании</p>
                                    <div class="product-price"><b><?php echo $product['price'];?></b> руб</div>
                                </div>
                                <div class="product-flex product-btn flex">
                                    <a href="/product/<?php echo $product['id'];?>" class="view-more">Узнать больше</a>
                                    <a href="#" data-id="<?php echo $product['id'];?>" class="add-to-cart add-cart">В корзину <i></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                              

                </div><!--features_items-->
                
                <!-- Постраничная навигация -->
                <?php echo $pagination->get(); ?>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>