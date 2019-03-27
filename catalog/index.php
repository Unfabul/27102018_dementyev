<?php 
    $pageConfig = [
        'title' => 'Каталог',
        'cssFiles' => [
            '/css/dist/catalog.css'
        ],
        'jsFiles' => [
            '/js/script.js',
            '/js/catalog.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php'); 
?>

    <main>
        <h1 class="main-header">Мужчинам</h1>
        <p class="main-p">Все товары</p>
        <section>
            <div class="catalog">

            </div>
            <div class="pagination"></div>
        </section>
    </main>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'); 
?>