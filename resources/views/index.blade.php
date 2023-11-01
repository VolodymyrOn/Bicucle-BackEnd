<?php 
include(public_path().'\func.php');
if(isset($_GET['id'])){ addToCart($_GET['id']); echo "<script>location.href='/';</script>"; }
if(isset($_GET['id_c'])){ addToComparison($_GET['id_c']); echo "<script>location.href='/';</script>"; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/atb.png" type="image/png">
    <title>BikeShop</title>
    <link rel="icon" href="image/privat-bank.jpg">
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
                <span id="cart-count-index" class="cart-count-index"><?php echo $_SESSION['comp_count']; ?></span>
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
    </nav>
    <div id="notification" class="notification">
        Товар додано до корзини
    </div>
    <div class="container">
        <aside class="sidenav">
            <div class="sidebar">
                <h2>Фільтр</h2>
                <form id="filterForm">
                    <label for="brand">Марка велосипеда:</label>
                    <select id="brand" name="brand">
                        <option value="">Виберіть марку велосипеда</option>
                        <option value="Merida">Merida</option>
                        <option value="Cannondale">Cannondale</option>
                    </select>
                
                    <label for="bikeType">Тип велосипеда:</label>
                    <select id="bikeType" name="bikeType">
                        <option value="">Виберіть тип велосипеда</option>
                        <option value="Гірський">Гірський</option>
                        <option value="Міський">Міський</option>
                    </select>
                
                    <label for="wheelSize">Розмір коліс:</label>
                    <select id="wheelSize" name="wheelSize">
                        <option value="">Виберіть розмір коліс</option>
                        <option value="27,5">27,5</option>
                        <option value="29,5">29,5</option>
                    </select>
                
                    <label for="brakeType">Тип гальмів:</label>
                    <select id="brakeType" name="brakeType">
                        <option value="">Виберіть тип гальмів</option>
                        <option value="MTB linear pull">MTB linear pull</option>
                        <option value="MTB5 linear pull">MTB5 linear pull</option>
                    </select>
                
                    <label for="color">Колір велосипеда:</label>
                    <select id="color" name="color">
                        <option value="">Виберіть колір велосипеда</option>
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>
                    </select>
                
                    <button id="filterButton" type="button">Фільтрувати</button>
                </form>
            </div>
        </aside>
    <main class="main">
        <?php
        $query="SELECT * from bicucles";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC);
        foreach($res as $bike){
            echo "<div class='bike-card' data-brand='Cannondale' data-bike-type='Міський' data-wheel-size='29,5' data-brake-type='MTB5 linear pull' data-color='Green'>";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo "  <p>Ціна:".$bike['Price']."$</p> </div>"; 
            echo " <a href='/characteristics?id=".$bike['id']."'>";
            echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a> <div class='button-container-index'><a href='/?id=".$bike['id']."'> <button>Купити</button> </a>";
            echo "<a href='/?id_c=".$bike['id']."'> <button>До порівняння</button> </a></div> </div>";
        }

    ?>

    </main>
    </div>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="scripts/basket.js"></script>
    <script src="scripts/basket-comparison.js"></script>
    <script src="scripts/sidebar.js"></script>
</body>
</html>