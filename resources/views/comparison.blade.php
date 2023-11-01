<?php 
include(public_path().'\func.php');
var_dump($_SESSION['comparison']);
//unset($_SESSION['comparison']);
//unset($_SESSION['comp_count']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/atb.png" type="image/png">
    <style>
        /* Зберігаємо стилі для header */
header {
    background-color: #111;
    color: #fff;
    padding: 5px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999; /* Збільшуємо z-index, щоб header був найвище */
}

/* Зберігаємо стилі для nav */
nav {
    background-color: #333;
    color: #fff;
    padding: 5px;
    display: flex;
    justify-content: space-between; /* Розташування по краях */
    align-items: center;
    height: 50px;
    position: fixed;
    top: 100px; /* Розташовуємо після header */
    left: 0;
    right: 0;
    z-index: 9999; /* Збільшуємо z-index, щоб nav був найвище після header */
}

/* Зберігаємо стилі для footer */
footer {
    background-color: #111;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
 
}

.main {
    background-color: #333;
    border-radius: 5px;
    padding: 5px;
    margin: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    flex-grow: 1;
    z-index: 0; /* Знижуємо z-index, щоб main був нижче за header, nav та footer */
    position: fixed; /* Зафіксовуємо main */
    top: 160px; /* Задаємо відстань від верху, щоб уникнути перекриття header і nav */
    bottom: 70px; /* Задаємо відстань від низу, щоб уникнути перекриття footer */
    left: 0;
    right: 0;
    overflow: auto;
    overflow-x: auto;
    z-index: 99999;

}
</style>
    <title>Порівняння</title>
</head>
<body>
    <header>
        <img src="image/bikeshop.png" alt="Велосипед 1">
        <h1>BikeShop</h1>
    </header>
    <nav> 
    <div class="nav-center">
        <a href="/">Каталог</a>
        <a href="/about-us">Про нас</a>
        <a href="/comparison">Порівняння</a>
        <div id="cart-count-container-index" class="cart-count-container-index">
                <span id="cart-count-index" class="cart-count-index">0</span>
        </div>
    </div>
    <div class="nav-right">
        <a class="basket-button" href="/basket" id="basket-link">
            <img class="basket" src="image/basket2.png" alt="Корзина">
        </a>
        <div id="cart-count-container" class="cart-count-container">
            <span id="cart-count" class="cart-count"><?php echo $_SESSION['Basket']; ?></span>
        </div>
        </div>
        <div id="notification" class="notification">
        Товар додано до корзини
    </div>
    <main class="main">
    <?php var_dump($_SESSION['comparison']); ?>
        <div class="comparison-container">
            <div class="bike-cards-container">
                <div class="vl"></div>
                <div class="bike-card-comparison">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                    <h3>Велосипед 1</h3>
                    <div class="button-container-comparison">
                        <button>Купити</button>
                        <button>Видалити з порівняння</button>
                    </div>
                </div>
                <div class="vl1"></div>
                <div class="bike-card-comparison">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 2">
                    <h3>Велосипед 2</h3>
                    <div class="button-container-comparison">
                        <button>Купити</button>
                        <button>Видалити з порівняння</button>
                    </div>
                </div>
                <div class="vl1"></div>
                <div class="bike-card-comparison">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 3">
                    <h3>Велосипед 3</h3>
                    <div class="button-container-comparison">
                        <button>Купити</button>
                        <button>Видалити з порівняння</button>
                    </div>
                </div>
                <div class="vl1"></div>
                <div class="bike-card-comparison">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 4">
                    <h3>Велосипед 4</h3>
                    <div class="button-container-comparison">
                        <button>Купити</button>
                        <button>Видалити з порівняння</button>
                    </div>
                </div>
                <div class="vl1"></div>
                <div class="bike-card-comparison">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 4">
                    <h3>Велосипед 5</h3>
                    <div class="button-container-comparison">
                        <button>Купити</button>
                        <button>Видалити з порівняння</button>
                    </div>
                </div>
            </div>
        <div class="characteristics-container"> 
        <table class="bike-comparison">
            <tr>
                <th></th>
                <th>Велосипед 1</th>
                <th>Велосипед 2</th>
                <th>Велосипед 3</th>
                <th>Велосипед 4</th>
                <th>Велосипед 5</th>
            </tr>
            <tr>
                <td>Діаметр колеса</td>
                <td>27,5"</td>
                <td>27,5"</td>
                <td>27,5"</td>
                <td>27,5"</td>
                <td>27,5"</td>
            </tr>
            <tr>
                <td>Касета</td>
                <td>Shimano HG41, 11-31, 8-шв</td>
                <td>Shimano HG41, 11-31, 8-шв</td>
                <td>Shimano HG41, 11-31, 8-шв</td>
                <td>Shimano HG41, 11-31, 8-шв</td>
                <td>Shimano HG41, 11-31, 8-шв</td>
            </tr>
            <tr>
                <td>Ручки перемикання</td>
                <td>Shimano Easy Fire EF505, 2x8</td>
                <td>Shimano Easy Fire EF505, 2x8</td>
                <td>Shimano Easy Fire EF505, 2x8</td>
                <td>Shimano Easy Fire EF505, 2x8</td>
                <td>Shimano Easy Fire EF505, 2x8</td>
            </tr>
            <tr>
                <td>Обода</td>
                <td>Cannondale, двостінні, 32 спиці</td>
                <td>Cannondale, двостінні, 32 спиці</td>
                <td>Cannondale, двостінні, 32 спиці</td>
                <td>Cannondale, двостінні, 32 спиці</td>
                <td>Cannondale, двостінні, 32 спиці</td>
            </tr>
            <tr>
                <td>Педалі</td>
                <td>Cannondale Urban Pedal</td>
                <td>Cannondale Urban Pedal</td>
                <td>Cannondale Urban Pedal</td>
                <td>Cannondale Urban Pedal</td>
                <td>Cannondale Urban Pedal</td>
            </tr>
            <tr>
                <td>Передні гальма</td>
                <td>Гідравлічний дисковий Shimano MT200, ротор RT26 160мм</td>
                <td>Гідравлічний дисковий Shimano MT200, ротор RT26 160мм</td>
                <td>Гідравлічний дисковий Shimano MT200, ротор RT26 160мм</td>
                <td>Гідравлічний дисковий Shimano MT200, ротор RT26 160мм</td>
                <td>Гідравлічний дисковий Shimano MT200, ротор RT26 160мм</td>
            </tr>
            <tr>
                <td>Передній перемикач</td>
                <td>Shimano Tourney, хомут 31.8</td>
                <td>Shimano Tourney, хомут 31.8</td>
                <td>Shimano Tourney, хомут 31.8</td>
                <td>Shimano Tourney, хомут 31.8</td>
                <td>Shimano Tourney, хомут 31.8</td>
            </tr>
            <tr>
                <td>Покришки</td>
                <td>WTB Byway, 650b x 40c</td>
                <td>WTB Byway, 650b x 40c</td>
                <td>WTB Byway, 650b x 40c</td>
                <td>WTB Byway, 650b x 40c</td>
                <td>WTB Byway, 650b x 40c</td>
            </tr>
            <tr>
                <td>Рама</td>
                <td>Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8"</td>
                <td>Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8"</td>
                <td>Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8"</td>
                <td>Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8"</td>
                <td>Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8"</td>
            </tr>
            <tr>
                <td>Рульова колонка</td>
                <td>Напівінтегрована</td>
                <td>Напівінтегрована</td>
                <td>Напівінтегрована</td>
                <td>Напівінтегрована</td>
                <td>Напівінтегрована</td>
            </tr>
            <tr>
                <td>Гальмівні ручки</td>
                <td>Shimano MT200 гідравлічні</td>
                <td>Shimano MT200 гідравлічні</td>
                <td>Shimano MT200 гідравлічні</td>
                <td>Shimano MT200 гідравлічні</td>
                <td>Shimano MT200 гідравлічні</td>
            </tr>
            <tr>
                <td>Кермо</td>
                <td>Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм</td>
                <td>Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм</td>
                <td>Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм</td>
                <td>Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм</td>
                <td>Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм</td>
            </tr>
            <tr>
                <td>Сідло</td>
                <td>Cannondale Urban</td>
                <td>Cannondale Urban</td>
                <td>Cannondale Urban</td>
                <td>Cannondale Urban</td>
                <td>Cannondale Urban</td>
            </tr>
            <tr>
                <td>Підсідельний штир</td>
                <td>Алюміній, 31.6 x 350мм</td>
                <td>Алюміній, 31.6 x 350мм</td>
                <td>Алюміній, 31.6 x 350мм</td>
                <td>Алюміній, 31.6 x 350мм</td>
                <td>Алюміній, 31.6 x 350мм</td>
            </tr>
            <tr>
                <td>Шатуни</td>
                <td>Shimano, 46/30</td>
                <td>Shimano, 46/30</td>
                <td>Shimano, 46/30</td>
                <td>Shimano, 46/30</td>
                <td>Shimano, 46/30</td>
            </tr>
            <tr>
                <td>Вилка</td>
                <td>Lefty, тверда, шток 1-1/8"</td>
                <td>Lefty, тверда, шток 1-1/8"</td>
                <td>Lefty, тверда, шток 1-1/8"</td>
                <td>Lefty, тверда, шток 1-1/8"</td>
                <td>Lefty, тверда, шток 1-1/8"</td>
            </tr>
            <tr>
                <td>Втулки</td>
                <td>Lefty 50 – передня; Formula DC-1422 QR - ззаду</td>
                <td>Lefty 50 – передня; Formula DC-1422 QR - ззаду</td>
                <td>Lefty 50 – передня; Formula DC-1422 QR - ззаду</td>
                <td>Lefty 50 – передня; Formula DC-1422 QR - ззаду</td>
                <td>Lefty 50 – передня; Formula DC-1422 QR - ззаду</td>
            </tr>
            <tr>
                <td>Винос</td>
                <td>Алюміній 6061, 31.8, 60мм</td>
                <td>Алюміній 6061, 31.8, 60мм</td>
                <td>Алюміній 6061, 31.8, 60мм</td>
                <td>Алюміній 6061, 31.8, 60мм</td>
                <td>Алюміній 6061, 31.8, 60мм</td>
            </tr>
            <tr>
                <td>Задні гальма</td>
                <td>MTB linear pull</td>
                <td>MTB linear pull</td>
                <td>MTB linear pull</td>
                <td>MTB linear pull</td>
                <td>MTB linear pull</td>
            </tr>
            <tr>
                <td>Задній перемикач</td>
                <td>Shimano Tourney</td>
                <td>Shimano Tourney</td>
                <td>Shimano Tourney</td>
                <td>Shimano Tourney</td>
                <td>Shimano Tourney</td>
            </tr>
        </table>
        </div>
    </div>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="scripts/comparison.js"></script>
</body>
</html>