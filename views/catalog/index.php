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
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                            <i></i>
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
                    
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="product-item">
                            <div class="product-image">
                                <div class="sticks">
                                    <div class="stick">-<?php echo $product['sales']; ?>%</div>
                                </div>
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
                            </div>
                            <div class="product-info">
                                 <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                <h3 class="product-name"><?php echo $product['name'];?></h3>
                                <div class="product-flex flex">
                                    
                                    <p class="product-desc"><?php echo $product['company'];?></p>
                                    <div class="product-price"><b><?php echo $product['price'];?></b> руб</div>
                                </div>
                                <div class="product-flex product-btn flex">
                                    <a href="/product/<?php echo $product['id'];?>" class="view-more">Узнать больше</a>
                                    <a href="#" data-id="<?php echo $product['id'];?>" class="add-to-cart add-cart">В корзину <i></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                   

                </div><!--features_items-->
            

            </div>

<!--  <div class="recommended_items" 
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                            <h2>$<?php echo $sliderItem['price']; ?></h2>
                                            <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                            <br/><br/>
                                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
                -->
            

        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/insta.php'; ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>