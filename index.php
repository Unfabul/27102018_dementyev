<?php 
    $cssFiles = [
        '/css/dist/main.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php'); 
?>
<main>
    <h1 class='main-header'>Новые поступления весны</h1>
    <p class="main-p">Мы подготовили для Вас лучшие новинки сезона</p>
    <div class="new">
        <div class="new__button">Посмотреть новинки</div>
    </div>
    <section>
        <div class="container">
            <div class="row row-01">
                <div class="item-big jacket">
                    <div class="jacket__text">
                        <p class="jacket-text">Детская<br> одежда</p>
                        <p class="jacket-text-2">New arrival</p>
                    </div>
                </div>
                <div class="item belt"></div>
            </div>
            <div class="row row-02">
                <div class="item light-grey">
                    <div class="light-grey__text">
                        <div class="light-grey-box">
                            <div class="light-grey__line"></div>
                            <div class="light-grey__img"></div>
                            <div class="light-grey__line"></div>
                        </div>
                        <p class="light-grey-text">Каждый сезон мы подготавливаем для Вас исключительно лучшую модную одежду. Следим за нашими новинками.</p>
                    </div>
                </div>
                <div class="item jeans">
                    <div class="jeans__text">
                        <p class="jeans-text">Джинсы</p>
                        <p class="jeans-price">от 3200 руб.</p>
                    </div>
                </div>
                <div class="item gray">
                    <div class="accessories__text">
                        <div class="gray-arrow"></div>
                        <p class="accessories-text">Аксессуары</p>
                    </div>
                </div>
            </div>
            <div class="row row-03">
                <div class="item shoes"></div>
                <div class="item light-grey">
                    <div class="light-grey__text">
                        <div class="light-grey-box">
                            <div class="light-grey__line"></div>
                            <div class="light-grey__img"></div>
                            <div class="light-grey__line"></div>
                        </div>
                        <p class="light-grey-text">Самые низкие цены в Москве.<br> Нашли дешевле? Вернем разницу.</p>
                    </div>
                </div>
                <div class="item girl">
                    <div class="girl__text">
                        <div class="text">
                            <p class="girl-text">Спортивная<br> одежда</p>
                            <p class="girl-price">от 590 руб.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-04">
                <div class="item gray">
                    <div class="shoes__text">
                        <div class="gray-arrow"></div>
                        <p class="shoes-text">Элегантная<br> обувь</p>
                        <p class="shoes-text-2">Ботинки, кроссовки</p>
                    </div>
                </div>
                <div class="item-big kids">
                    <div class="kids__text">
                        <p class="kids-text">Детская<br> одежда</p>
                        <p class="kids-text-2">New arrival</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="subscribe">
            <div class="subscribe__text">
                <h2 class="subscribe__text__header">Будь всегда в курсе выгодных предложений</h2>
                <p class="subscribe__text__p">подписывайся и следи за новинками и выгодными предложениями.</p>
            </div>
            <div class="subscribe__box">
                <form method="GET">
                    <input type="text" name="email" placeholder="e-mail">
                    <button type="submit">записаться</button>
                </form>
                <div class="subscribe__error">
                    <p>Некорректный e-mail. Попробуйте еще раз.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'); 
?>