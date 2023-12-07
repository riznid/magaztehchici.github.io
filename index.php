<div class="product-container">
    <?php 
    $page = $_GET['page'];
    $goods = [
        [
            'id' => 0,
            'name' => 'Iphone 15',
            'desc' => '<h2>Характеристики iPhone 15 и 15 Pro</h2>
            <br>Дисплей: 6,1″, OLED, 2556 × 1179, 60 Гц / 6,1″, OLED, 2556 × 1179, 120 Гц</br>
            <br>Чип: A16 / A17 Pro</br>
            <br>Оперативная память: 6 ГБ / 8 ГБ</br>
            <br>Постоянная память: 128, 256 и 512 ГБ / 128, 256, 512 и 1024 ГБ</br>
            <br>Основная камера: 48 Мп + 12 Мп / 48 Мп + 12 Мп + 12 Мп</br>
            <br>Фронтальная камера: 12 Мп / 12 Мп</br>
            <br>Аккумулятор: 3349 мА·ч / 3274 мА·ч</br>
            <br>Габариты: 147,6 × 71,6 × 7,8 мм, 187 г / 146,6 × 70,6 × 8,3 мм, 187 г</br>',
            'descp' => '',
            'img' => 'images/iphone15.jpg',
            'price' => '1000$',
            'text' => ''
        ],
        [
            'id' => 1,
            'name' => 'Iphone 12',
            'desc' => '<h2>Характеристики iPhone 12</h2>
            <br>Оперативная память: 4 ГБ</br>
            <br>Емкость аккумулятора: 2500-2999 мА⋅ч</br>
            <br>Процессор: Apple A14 Bionic</br>
            <br>Разрешение основной камеры: 10 - 14 МП</br>
            <br>Диагональ экрана: 6.0"-6.4"</br>
            <br>Разрешение экрана: 2532x1170</br>
            <br>Количество SIM-картnano SIM+​eSIM, Dual nano SIM</br>'
            ,

            'descp' => '',
            'img' => 'images/iphone12.jpg',
            'price' => '600$',
            'text' => ''
        ],
        [
            'id' => 2,
            'name' => 'Iphone 10',
            'desc' => '<h2>Характеристики iPhone 10</h2>
            <br>Размеры: 70.9 x 143.6 x 7.7 мм</br>
            <br>Вес: 174 г.</br>
            <br>SoC: Apple A11 Bionic APL1W72.</br>
            <br>Процессор: 2x Monsoon, 4x Mistral, 2100 МГц, Количество ядер: 6</br>
            <br>Количество ядер: 3</br>
            <br>Оперативная память: 3 ГБ.</br>
            <br>Встроенная память: 64 ГБ, 256 ГБ.</br>
            <br>Экран: 5.8 in, OLED, 1125 x 2436 пикселей, 24 бит.</br>
            <br> Аккумулятор: 2716 мА·ч, Li-Ion (Литий-ионный).</br>',
            'descp' => '',
            'img' => 'images/iphone10.jpg',
            'price' => '300$',
            'text' => ''
        ]
    ];

    if (!isset($page)) {
        require 'main.php';
    } elseif ($page == 'shop') {
        require 'shop.php';
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('openedProduct.php');
    }
    ?>
</div>
