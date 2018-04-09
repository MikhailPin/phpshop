
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="top">
                    <div class="container flex">
                        <ul class="main-menu flex">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/catalog/">Каталог предложений</a></li>
                            <li><a href="/about/">О магазине</a></li>
                            <li><a href="/blog/">Новости</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                        </ul>
                        <div class="top-info">
                            <a class="top-mail" href="mailto:kuponsale@support.com">kuponsale@support.com</a>
                            <div class="top-social">
                                <a href="https://vk.com/" target="_blank"><img src="/template/images/vk.png" alt=""></a>
                                <a href="https://www.instagram.com/?hl=ru" target="_blank"><img src="/template/images/insta.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container no flex header-container">
                    <div class="logo"><a href="/"><img src="/template/images/logo.png" alt=""></a></div>
                    <div class="search-form">
                        <form action="/product_t/search" method="post">
                            <div class="form-group" style="padding: 15px;">
                                <input type="search" name="search" class="form-control" placeholder="Например: Купоны Vsemsmart" required="required">
                                <button name="submit" type="submit" >Найти</button>
                            </div>
                        </form>


                    </div>
                    <ul class="header-nav flex">
                        <?php if (User::isGuest()): ?>
                            <li><a href="/user/register/"><img src="/template/images/user.png" alt="">Регистрация</a></li>
                            <li><a href="/user/login/"><img src="/template/images/login.png" alt="">Вход</a></li>
                         <?php else: ?>
                            <li><a href="/cabinet/"><img src="/template/images/user.png" alt="">Аккаунт</a></li>
                            <li><a href="/user/logout/"><img src="/template/images/login.png" alt="">Выход</a></li>
                        <?php endif; ?>
                            <li><a href="/cart/"><img src="/template/images/shop_cart.png" alt="">Корзина
                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)</a></li>
                    </ul>
                </div>
            </header><!--/header-->