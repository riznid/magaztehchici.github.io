<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин техники</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body id="body">
    <header id="header">
        <div>
            <nav>
                <img id="logo" src="images/logo.png">
                <a id="shop" href="index.php?page=shop">Магазин</a>
                <a id="home" href="/">Главная</a>
            </nav>
        </div>
    </header>

    <div class="container2">
        <div>
            <img class="ph2" src="<?php echo $good["img"]; ?>">
        </div>
        <div class="product-details">
            <div class="textproduct"><?php echo $good['desc']; ?></div>
            <div class="textproduct"><?php echo $good['descp']; ?></div>
            <div class="cenaproduct">Цена: <?php echo $good['price']; ?></div>
        </div>
    </div>
</body>
</html>