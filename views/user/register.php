<?php require_once(FILEPLACE . '/views/layouts/header.php');?>
    <h1>registerUser</h1>
    <section class="container">
        <main class="main">
            <h2>Регистрация</h2>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Имя">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Пароль">
                <input type="submit" name="submit" value="Регистрация">
            </form>
        </main>
    </section>
<?php require_once(FILEPLACE . '/views/layouts/footer.php');?>