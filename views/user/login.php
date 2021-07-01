<?php require_once(FILEPLACE . '/views/layouts/header.php');?>
    <h1>loginUser</h1>
    <section class="container">
        <main class="main">
            <h2>Authorization</h2>

                <?php if(isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                    <input type="submit" name="submit" value="Вход">
                </form>

        </main>
    </section>
<?php require_once(FILEPLACE . '/views/layouts/footer.php');?><?php
