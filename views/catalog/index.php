<?php require_once(FILEPLACE . '/views/layouts/header.php');?>
    <h1>indexCatalog</h1>
    <section class="container">
        <main class="main">
            <h2>Товары</h2>
            <div class="late_products">
                <?php foreach ($latestProducts as $lateProduct): ?>
                    <div class="late_products__item">
                        <img src="/template/img/card.png" alt="card">
                        <a href="/product/<?php echo $lateProduct['id'];?>">
                            <?php echo $lateProduct['name']; ?>
                        </a>

                        <p><?php echo $lateProduct['price']; ?>$</p>

                        <?php if($lateProduct['is_new']): ?>
                            <p>Новый товар</p>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>
            </div>
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