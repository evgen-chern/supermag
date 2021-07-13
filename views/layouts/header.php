<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/template/css/style.css">
    <title>SuperMag</title>
</head>
<body>
<header class="header">
    <div class="header_logo">
        <a href="/">
            <img src="/template/img/logo.png" alt="logo">
        </a>
    </div>

    <nav class="header_menu">
        <ul>
            <li><a href="/">First item</a></li>
            <li><a href="/">Second item</a></li>
            <li><a href="/">Third item</a></li>
        </ul>
    </nav>

    <div class="header_cabinet">
        <a href="/cart">
            <span id="cart-count"><?php echo Cart::countItems();?></span>
            To_cart
        </a>
        <?php if(User::isGuest()): ?>
        <a href="/user/register/">Reg</a>
        <a href="/user/login/">Log_in</a>
        <?php else: ?>
        <a href="/user/logout/">Log_out</a>
        <a href="/cabinet/">My_profile</a>
        <?php endif; ?>
    </div>
</header>