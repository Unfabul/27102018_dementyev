<?php 
    $cssFiles = [
        '/css/catalog.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php'); 
?>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');

    $template = [
        'product'=>[],
        'sizes'=>[]
    ];

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = {$product_id}";
        $result = mysqli_query($db, $sql);
        // echo "<pre>";
        // print_r( mysqli_fetch_assoc($result) );
        // echo "</pre>";
        $template['product'] = mysqli_fetch_assoc($result);

        // while($row = mysqli_fetch_assoc($result)){
        //     $price = $row['price'] - $row['price'] * $row['sale'];
        //     echo "
        //         <div class='card'>
        //             <h1>{$row['name']}</h1>
        //             <div class='card-article'>{$row['sku']}</div>
        //             <img class='card-img' src='{$row['photo']}'>
        //             <div class='card-descr'>{$row['description']}</div>
        //             <div class='card-price'>{$price} руб.</div>
        //         </div>
        //     ";
        // }

        $sql_sizes = "SELECT * FROM product_sizes WHERE product_id = {$product_id}";
        $result_sizes = mysqli_query($db, $sql_sizes);

        while( $row = mysqli_fetch_assoc($result_sizes) ){
            $template['sizes'][] = $row;
        }

        echo "<pre>";
        print_r( $template['sizes'] );
        echo "</pre>";
    }
?>

<div class="product">
    <h1><?=$template['product']['name']?></h1>
    <div class="product__article"><?=$template['product']['sku']?></div>
    <img class="product__img" src='<?=$template['product']['photo']?>'>
    <div class="product__description"><?=$template['product']['description']?></div>
    <?php
        $price = $template['product']['price'] - $template['product']['price'] * $template['product']['sale'];
    ?>
    <div class="product__price"><?=$price?></div>
</div>
<div>
    <?php foreach($template['sizes'] as $size): ?>
        <span><?=$size['size']?></span>
    <?php endforeach; ?>
</div>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'); 
?>