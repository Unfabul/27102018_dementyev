<?php 
    $cssFiles = [];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php'); 
?>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($db, $sql);
        // echo "<pre>";
        // print_r( mysqli_fetch_assoc($result) );
        // echo "</pre>";

        while($row = mysqli_fetch_assoc($result)){
            $price = $row['price'] - $row['price'] * $row['sale'];
            echo "
                <div class='card'>
                    <h1>{$row['name']}</h1>
                    <div class='card-article'>{$row['sku']}</div>
                    <img class='card-img' src='{$row['photo']}'>
                    <div class='card-descr'>{$row['description']}</div>
                    <div class='card-price'>{$price} руб.</div>
                </div>
            ";
        }
    }
?>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'); 
?>