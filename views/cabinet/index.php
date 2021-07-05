<?php require_once(FILEPLACE . '/views/layouts/header.php');?>

<h1>UserCabinet</h1>
<section class="container">
    <main class="main">
        <h2>Личный кабинет <?php echo $user['name'];?></h2>
        <ul>
            <li><a href="/cabinet/edit">Change data</a></li>
            <li><a href="/user/history">Shopping list</a></li>
        </ul>
    </main>
</section>

<?php require_once(FILEPLACE . '/views/layouts/footer.php');?>
