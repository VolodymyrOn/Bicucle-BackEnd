<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/atb.png" type="image/png">
    <title>BikeShop</title>
</head>
<body>
    <header>
        <img src="image/bikeshop.png" alt="Велосипед 1">
        <h1>BikeShop</h1>
    </header>
    <nav> 
        <a href="/">Каталог</a>
        <a href="/about-us">Про нас</a>
        <a href="/comparison">Порівняння</a>
        <a class="basket-button" href="/basket" id="basket-link">
            <img class="basket" src="image/basket2.png" alt="Корзина">
        </a>
        <div id="cart-count-container" class="cart-count-container">
            <span id="cart-count" class="cart-count">0</span>
        </div>
    </nav>
    <div id="notification" class="notification">
        Товар додано до корзини
    </div>
    <div class="container">
        <aside class="sidenav">
            <div class="sidebar">
            <h2>Фільтр</h2>
                <form id="filterForm">
                    <label for="wheelDiameter">Діаметр колеса:</label>
                    <select id="wheelDiameter" name="wheelDiameter">
                        <option value="">Виберіть діаметр колеса</option>
                        <option value="27.5">27,5"</option>
                    </select>
        
                    <label for="cassette">Касета:</label>
                    <select id="cassette" name="cassette">
                        <option value="">Виберіть касету</option>
                        <option value="Shimano HG41, 11-31, 8-шв">Shimano HG41, 11-31, 8-шв</option>
                    </select>
        
                    <label for="shifters">Ручки перемикання:</label>
                    <select id="shifters" name="shifters">
                        <option value="">Виберіть ручки перемикання</option>
                        <option value="Shimano Easy Fire EF505, 2x8">Shimano Easy Fire EF505, 2x8</option>
                    </select>
        
                    <label for="rims">Обода:</label>
                    <select id="rims" name="rims">
                        <option value="">Виберіть ободи</option>
                        <option value="Cannondale, двостінні, 32 спиці">Cannondale, двостінні, 32 спиці</option>
                    </select>
        
                    <label for="pedals">Педалі:</label>
                    <select id="pedals" name="pedals">
                        <option value="">Виберіть педалі</option>
                        <option value="Cannondale Urban Pedal">Cannondale Urban Pedal</option>
                    </select>
        
                    <label for="frontBrakes">Передні гальма:</label>
                    <select id="frontBrakes" name="frontBrakes">
                        <option value="">Виберіть передні гальма</option>
                        <option value="Гідравлічний дисковий Shimano MT200, ротор RT26 160мм">Гідравлічний дисковий Shimano MT200, ротор RT26 160мм</option>
                    </select>
        
                    <label for="frontDerailleur">Передній перемикач:</label>
                    <select id="frontDerailleur" name="frontDerailleur">
                        <option value="">Виберіть передній перемикач</option>
                        <option value="Shimano Tourney, хомут 31.8">Shimano Tourney, хомут 31.8</option>
                    </select>
        
                    <label for="tires">Покришки:</label>
                    <select id="tires" name="tires">
                        <option value="">Виберіть покришки</option>
                        <option value="WTB Byway, 650b x 40c">WTB Byway, 650b x 40c</option>
                    </select>
        
                    <label for="frame">Рама:</label>
                    <select id="frame" name="frame">
                        <option value="">Виберіть раму</option>
                        <option value="Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8\"">Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8"</option>
                    </select>
        
                    <label for="headset">Рульова колонка:</label>
                    <select id="headset" name="headset">
                        <option value="">Виберіть рульову колонку</option>
                        <option value="Напівінтегрована">Напівінтегрована</option>
                    </select>
        
                    <label for="brakeLevers">Гальмівні ручки:</label>
                    <select id="brakeLevers" name="brakeLevers">
                        <option value="">Виберіть гальмівні ручки</option>
                        <option value="Shimano MT200 гідравлічні">Shimano MT200 гідравлічні</option>
                    </select>
        
                    <label for="handlebar">Кермо:</label>
                    <select id="handlebar" name="handlebar">
                        <option value="">Виберіть кермо</option>
                        <option value="Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм">Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм</option>
                    </select>
        
                    <label for="saddle">Сідло:</label>
                    <select id="saddle" name="saddle">
                        <option value="">Виберіть сідло</option>
                        <option value="Cannondale Urban">Cannondale Urban</option>
                    </select>
        
                    <label for="seatpost">Підсідельний штир:</label>
                    <select id="seatpost" name="seatpost">
                        <option value="">Виберіть підсідельний штир</option>
                        <option value="Алюміній, 31.6 x 350мм">Алюміній, 31.6 x 350мм</option>
                    </select>
        
                    <label for="crankset">Шатуни:</label>
                    <select id="crankset" name="crankset">
                        <option value="">Виберіть шатуни</option>
                        <option value="Shimano, 46/30">Shimano, 46/30</option>
                    </select>
        
                    <label for="fork">Вилка:</label>
                    <select id="fork" name="fork">
                        <option value="">Виберіть вилку</option>
                        <option value="Lefty, тверда, шток 1-1/8\"">Lefty, тверда, шток 1-1/8"</option>
                    </select>
        
                    <label for="hubs">Втулки:</label>
                    <select id="hubs" name="hubs">
                        <option value="">Виберіть втулки</option>
                        <option value="Lefty 50 – передня; Formula DC-1422 QR - ззаду">Lefty 50 – передня; Formula DC-1422 QR - ззаду</option>
                    </select>
        
                    <label for="stem">Винос:</label>
                    <select id="stem" name="stem">
                        <option value="">Виберіть винос</option>
                        <option value="Алюміній 6061, 31.8, 60мм">Алюміній 6061, 31.8, 60мм</option>
                    </select>
        
                    <label for="rearBrakes">Задні гальма:</label>
                    <select id="rearBrakes" name="rearBrakes">
                        <option value="">Виберіть задні гальма</option>
                        <option value="MTB linear pull">MTB linear pull</option>
                    </select>
        
                    <label for="rearDerailleur">Задній перемикач:</label>
                    <select id="rearDerailleur" name="rearDerailleur">
                        <option value="">Виберіть задній перемикач</option>
                        <option value="Shimano Tourney">Shimano Tourney</option>
                    </select>
        
                    <button type="submit">Фільтрувати</button>
                </form>
            </div>
        </aside>
    <main class="main">
        <?php
        $db=mysqli_connect("localhost","root","","laravel");
        $query="SELECT * from bicucles";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC);
        foreach($res as $bike){
            echo "<div class='bike-card'>";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo " <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p> <p>Ціна:".$bike['Price']."$</p> </div>"; 
            echo " <a href='/characteristics?id=".$bike['id']."'>";
            echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a> <div class='button-container'> <button>Купити</button>";
            echo " <button>До порівняння</button> </div> </div>";
        }
           

    ?>

    </main>
</div>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="scripts/basket.js"></script>
</body>
</html>