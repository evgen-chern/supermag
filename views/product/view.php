<?php require_once(FILEPLACE . '/views/layouts/header.php');?>

    <h1>ProductView</h1>
    <section class="container">
        <main class="main">
            <h2><?php echo $product['name']; ?></h2>

            <img src="/template/img/card.png" alt="card">

            <a href="/product/<?php echo $product['id'];?>">
            </a>

            <p><?php echo $product['price']; ?>$</p>

            <?php if($product['is_new']): ?>
                <p>Новый товар</p>
            <?php endif; ?>

            <p><?php echo $product['description']?></p>
        </main>
        <aside class="sidebar">
            <h2><a href="/catalog/">Каталог</a></h2>
            <ul>
                <?php foreach ($categories as $categoryItem): ?>
                    <li>
                        <a href="/category/<?php echo $categoryItem['id'];?>">
                            <?php echo $categoryItem['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </section>

<?php require_once(FILEPLACE . '/views/layouts/footer.php');?>