<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/atb.png" type="image/png">
    <title>Характеристики</title>
</head>
<body>
    <header>
        <h1>Характеристики велосипеда</h1>
    </header>
    <nav> 
        <a href="/">Каталог</a>
        <a href="/about-us">Про нас</a>
        <a href="/comparison">Порівняння</a>
        <a class= "basket-button" href="/basket">
            <img class= "basket" src="image/basket2.png" alt="Корзина">
        </a>
        <div id="cart-count-container" class="cart-count-container">
            <span id="cart-count" class="cart-count">0</span>
        </div>
    </nav>
    <main class="main">
        <div class="bike-card">
            <div class="bike-info">
                <h2>Cannondale Bad Boy 3 (2022) BBQ</h2>
                <p>Ціна: $500</p>
            </div>
            <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-description">
        <?php
        $db=mysqli_connect("localhost","root","","laravel");
        $query="SELECT * from characteristics where Velo_id='$_GET[id]'";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_assoc($db_res); ?>

            <h3>Характеристики велосипеда:</h3>
            <table>
                <tr>
                    <td>Діаметр колеса:</td>
                    <td>
                        <?php echo $res['Wheel diameter']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Касета:</td>
                    <td><?php echo $res['Cassette']; ?></td>
                </tr>
                <tr>
                    <td>Ручки перемикання:</td>
                    <td><?php echo $res['Shifters']; ?></td>
                </tr>
                <tr>
                    <td>Обода:</td>
                    <td><?php echo $res['Rim']; ?></td>
                </tr>
                <tr>
                    <td>Педалі:</td>
                    <td><?php echo $res['Pedals']; ?></td>
                </tr>
                <tr>
                    <td>Передні гальма:</td>
                    <td><?php echo $res['Front brakes']; ?></td>
                </tr>
                <tr>
                    <td>Передній перемикач:</td>
                    <td><?php echo $res['Front derailleur']; ?></td>
                </tr>
                <tr>
                    <td>Покришки:</td>
                    <td><?php echo $res['Tires']; ?></td>
                </tr>
                <tr>
                    <td>Рама:</td>
                    <td><?php echo $res['Frame']; ?></td>
                </tr>
                <tr>
                    <td>Рульова колонка:</td>
                    <td><?php echo $res['Steering column']; ?></td>
                </tr>
                <tr>
                    <td>Гальмівні ручки:</td>
                    <td><?php echo $res['Brake levers']; ?></td>
                </tr>
                <tr>
                    <td>Кермо:</td>
                    <td><?php echo $res['Handlebar']; ?></td>
                </tr>
                <tr>
                    <td>Сідло:</td>
                    <td><?php echo $res['Saddle']; ?></td>
                </tr>
                <tr>
                    <td>Підсідельний штир:</td>
                    <td><?php echo $res['Seatpost']; ?></td>
                </tr>
                <tr>
                    <td>Шатуни:</td>
                    <td><?php echo $res['Cranks']; ?></td>
                </tr>
                <tr>
                    <td>Вилка:</td>
                    <td><?php echo $res['Fork']; ?></td>
                </tr>
                <tr>
                    <td>Втулки:</td>
                    <td><?php echo $res['Bushes']; ?></td>
                </tr>
                <tr>
                    <td>Винос:</td>
                    <td><?php echo $res['Bearing']; ?></td>
                </tr>
                <tr>
                    <td>Задні гальма:</td>
                    <td><?php echo $res['Rear brakes']; ?></td>
                </tr>
                <tr>
                    <td>Задній перемикач:</td>
                    <td><?php echo $res['Rear derailleur']; ?></td>
                </tr>
            </table>
        </div>
        <div class="offers">
            <h3>Інші пропозиції:</h3>
            <div class="bike-card-offers">
                <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                <h2>Велосипед 1</h2>
                <h4>опис</h4>
                <p>Ціна: $500</p>
            </div>
            <div class="bike-card-offers">
                <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                <h2>Велосипед 1</h2>
                <h4>опис</h4>
                <p>Ціна: $500</p>
            </div>
            <div class="bike-card-offers">
                <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                <h2>Велосипед 1</h2>
                <h4>опис</h4>
                <p>Ціна: $500</p>
            </div>
            <div class="bike-card-offers">
                <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                <h2>Велосипед 1</h2>
                <h4>опис</h4>
                <p>Ціна: $500</p>
            </div>
            <div class="bike-card-offers">
                <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                <h2>Велосипед 1</h2>
                <h4>опис</h4>
                <p>Ціна: $500</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="scripts/basket.js"></script>
</body>
</html>