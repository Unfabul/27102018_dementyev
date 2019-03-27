<?php
    $pageConfig = [
        'title' => 'Корзина',
        'cssFiles' => [
            '/css/dist/main.css',
            '/css/dist/basket.css'
        ],
        'jsFiles' => [
            '/js/script.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    session_start();

    $template = [
        'products' => []
    ];

    foreach($_SESSION['basket'] as $basketItem){

        $sql = "SELECT * FROM products WHERE id = {$basketItem['id']}";
        $result = mysqli_query($db, $sql);
        $product = mysqli_fetch_assoc($result);

        $product['count'] = $basketItem['count'];
        $product['price_sale'] = ($product['price'] - $product['price'] * $product['sale']) * $product['count'];

        // пример дебага
        //_p($product);
        $template['products'][] = $product;
    }
?>

<!-- new -->
<main class="main">
    <h1 class="main-header">ВАША КОРЗИНА</h1>
        <div class="basket-header">
            <div class="photo">Фото</div>
            <div class="name">Наименование</div>
            <div class="count">Кол-во</div>
            <div class="price">Цена</div>
        </div>
        <?php foreach($template['products'] as $productItem):?>
        <div class="basket">
            <div class="basket__img" style='background-image:url(<?=$productItem['photo']?>)'></div>
            <div class="basket__name"><?=$productItem['name']?></div>
            <div class="basket__count"><?=$productItem['count']?></div>
            <?php
                // лучше перенести расчет вверх
                //$price = ($productItem['price'] - $productItem['price'] * $productItem['sale']) * $productItem['count'];
            ?>
            <?/*?><div class="basket__price"><?=$price?> руб.</div><?*/?>
            <div class="basket__price"><?=$productItem['price_sale']?> руб.</div>
        </div>
        <?php endforeach; ?>
    
</main>
<!-- new -->

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>