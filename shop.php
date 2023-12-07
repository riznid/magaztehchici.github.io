<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1 id="h1">Ассортимент магазина</h1>
    <div class="container1">
        <?php foreach ($goods as $good): ?>
            <div class="product">
                <img class="ph" src="<?php echo $good['img']; ?>">
                <h3 class="name"><?php echo $good['name']; ?></h3>
                <div class="cena"><?php echo $good['price']; ?></div>
                <a class="a" href="index.php?page=product&id=<?php echo $good['id']; ?>">
                    <button class="button">Подробнее</button>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
