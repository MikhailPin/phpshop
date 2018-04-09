    <div class="page-buffer"></div>
</div>

<footer>
    <div class="container flex no">
        <div class="footer-logo">
            <div class="logo"><a href="/"><img src="/template/images/logo.png" alt=""></a></div>
            <div class="footer-desc">Купоны. Скидки. Сервисы коллективных покупок<br>
в Донецкой Народной Республике</div>
        </div>
        <ul class="footer-menu flex">
            <li>
                Полезное
                <ul>
					<?php if (User::isGuest()): ?>
                        <li><a href="/user/login/">Вход</a></li>
                        <li><a href="/user/register/">Регистрация</a></li>
					<?php else: ?>
                        <li><a href="/cabinet/">Аккаунт</a></li>
                        <li><a href="/user/logout/">Выход</a></li>
					<?php endif; ?>
                    <li><a href="/cart/">Корзина</a></li>
                    <li><a href="/about/">О сервисе</a></li>
                    <li><a href="/blog/">Новости</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                </ul>
            </li>
            <li>
                Каталог категорий
                <ul>
                    <li><a href="#">Другое</a></li>
                    <li><a href="#">Здоровье</a></li>
                    <li><a href="#">Еда и рестораны</a></li>
                    <li><a href="#">Красота и SPA</a></li>
                    <li><a href="#">Развлечения</a></li>
                    <li><a href="#">Обучение</a></li>
                    <li><a href="#">Спорт и фитнес</a></li>
                    <li><a href="#">Туризм и отдых</a></li>
                </ul>
            </li>
            <li>
                Контактная информация
                <ul>
                    <li><a href="#">+38 (071) 375-29-79  <small>(феникс)</small></a></li>
                    <li><a href="#">+38 (099) 030-34-88 <small>(вайбер)</small></a></li>
                    <li><a href="#">kuponsale@support.com</a></li>
                    <li class="footer-menu-social">
                        <a href="https://vk.com/" target="_blank"><img src="/template/images/vk.png" alt=""></a>
                        <a href="https://vk.com/" target="_blank"><img src="/template/images/insta.png" alt=""></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="copy">Все права защищены (с) 2018</div>
    </div>
</footer>

<div class="add-modal"></div>

<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/owl.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/instafeed.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/jquery.jgrowl.min.js"></script>
<script src="/template/js/main.js"></script>

</body>
</html>