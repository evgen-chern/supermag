<?php require_once(FILEPLACE . '/views/layouts/header.php');?>

    <h1>Contact us</h1>
    <section class="container">
        <main class="main">
            <h2>Contact form</h2>
            <?php if($result): ?>
                <p>Mail successfully send</p>
            <?php else: ?>
                <?php if(isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post">
                    <input type="email" name="userEmail" placeholder="Your mail" value="<?php echo $userEmail; ?>">
                    <input type="text" name="userText" placeholder="Text" value="<?php echo $userText; ?>">
                    <input type="submit" name="submit" value="Send">
                </form>
            <?php endif; ?>
        </main>
    </section>

<?php require_once(FILEPLACE . '/views/layouts/footer.php');?><?php
