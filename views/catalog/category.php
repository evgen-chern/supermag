<?php require_once(FILEPLACE . '/views/layouts/header.php');?>
    <h1>categoryCatalog</h1>
    <section class="container">
        <main class="main">
            <h2>Товары категории</h2>
            <div class="late_products">
                <?php foreach ($categoryProducts as $product): ?>
                    <div class="late_products__item">
                        <img src="/template/img/card.png" alt="card">
                        <a href="/product/<?php echo $product['id'];?>">
                            <?php echo $product['name']; ?>
                        </a>

                        <p><?php echo $product['price']; ?>$</p>
                        <a href="/cart/add/<?php echo $product['id'];?>">
                            ToCart
                        </a>

                        <?php if($product['is_new']): ?>
                            <p>Новый товар</p>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>
            </div>
            <?php echo $pagination->get();?>
        </main>
        <aside class="sidebar">
            <h2><a href="/catalog/">Каталог</a></h2>
            <ul>
                <?php foreach ($categories as $categoryItem): ?>
                    <li>
                        <a href="/category/<?php echo $categoryItem['id'];?>"
                        class="<?php if ($categoryId == $categoryItem['id']) echo 'active';?>">
                            <?php echo $categoryItem['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </section>
<?php require_once(FILEPLACE . '/views/layouts/footer.php');?>