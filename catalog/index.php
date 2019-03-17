<?php 
    $cssFiles = [
        '/css/catalog.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php'); 
?>

<div class="wrapper">
    <header class="header">
        <div class="logo"></div>
        <nav class="navigation">
            <a class="navigation__item" href="#">Женщинам</a>
            <a class="navigation__item" href="#">Мужчинам</a>
            <a class="navigation__item" href="#">Детям</a>
            <a class="navigation__item" href="#">Новинки</a>
            <a class="navigation__item" href="#">О нас</a>
        </nav>
        <div class="user-info">
            <div class="user-info__pic"></div>
            <div class="user-info__text">
                Привет, Алексей (<span class="text_active">выйти</span>)
            </div>
        </div>
        <div class="basket">
            <div class="basket__pic"></div>
            <div class="basket__text">
                Корзина(5)
            </div>
        </div>
    </header>
    <main>
        <h1 class="main-header">Мужчинам</h1>
        <p class="main-p">Все товары</p>
        <section>
            <div class="catalog">

            </div>
            <div class="pagination"></div>
        </section>
    </main>
    <footer class="footer">
        <div class="collections">
            <h4 class="collections__header footer-header">Коллекции</h4>
            <a class="collections__item collections-active" href="#">Женщинам (1725)</a>
            <a class="collections__item" href="#">Мужчинам (635)</a>
            <a class="collections__item" href="#">Детям (2514)</a>
            <a class="collections__item" href="#">Новинки (76)</a>
        </div>
        <div class="footer-vertical-line"></div>
        <div class="about">
            <h4 class="about__header footer-header">Магазин</h4>
            <a class="about__item" href="#">О нас</a>
            <a class="about__item" href="#">Доставка</a>
            <a class="about__item" href="#">Работай с нами</a>
            <a class="about__item" href="#">Контакты</a>
        </div>
        <div class="footer-vertical-line"></div>
        <div class="social">
            <h4 class="social__header footer-header">Мы в социальных сетях</h4>
            <p class="social__text">Сайт разработан в inordic.ru<br>2018 (c) Все права защищены</p>
            <div class="social__links">
                <div class="social__links__item">
                    <a class="social__links__item__pic twitter-pic" href="#"></a>
                </div>
                <div class="social__links__item">
                    <a class="social__links__item__pic facebook-pic" href="#"></a>
                </div>
                <div class="social__links__item">
                    <a class="social__links__item__pic instagram-pic" href="#"></a>
                </div>
            </div>
        </div>
    </footer>
    
</div>
<script src="/js/catalog.js"></script>


<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'); 
?>