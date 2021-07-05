<?php require_once(FILEPLACE . '/views/layouts/header.php');?>

    <h1>UserCabinet</h1>
    <section class="container">
        <main class="main">
            <h2>Change userData</h2>
            <?php if($result): ?>
                <p>Data successfully edit</p>
            <?php else: ?>
                <?php if(isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>">
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                    <input type="submit" name="submit" value="Save">
                </form>
            <?php endif; ?>
        </main>
    </section>

<?php require_once(FILEPLACE . '/views/layouts/footer.php');?>