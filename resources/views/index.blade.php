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
    <link rel="shortcut icon" href="image/icon.png" type="image/png">
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
                        <option value="Bianchi">Bianchi</option>
                        <option value="Pride">Pride</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="KTM">KTM</option>
                        <option value="Schwinn">Schwinn</option>
                        <option value="Cannondale">Cannondale</option>
                    </select>
                
                    <label for="bikeType">Тип велосипеда:</label>
                    <select id="bikeType" name="bikeType">
                        <option value="">Виберіть тип велосипеда</option>
                        <option value="Гірський">Гірський</option>
                        <option value="Міський">Міський</option>
                        <option value="Шосейний">Шосейний</option>
                        <option value="Електро">Електро</option>
                        <option value="Турінг">Турінг</option>
                    </select>
                
                    <label for="wheelSize">Розмір коліс:</label>
                    <select id="wheelSize" name="wheelSize">
                        <option value="">Виберіть розмір коліс</option>
                        <option value="26">26</option>
                        <option value="27,5">27,5</option>
                        <option value="28">28</option>
                        <option value="29">29</option>                        
                    </select>
                
                    <label for="brakeType">Тип гальмів:</label>
                    <select id="brakeType" name="brakeType">
                        <option value="">Виберіть тип гальмів</option>
                        <option value="Дискові_гідравлічні">Дискові гідравлічні</option>
                        <option value="Дискові">Дискові</option>
                        <option value="Обідні">Обідні</option>
                    </select>
                
                    <label for="color">Колір велосипеда:</label>
                    <select id="color" name="color">
                        <option value="">Виберіть колір велосипеда</option>
                        <option value="Чорний">Чорний</option>
                        <option value="Синій">Синій</option>
                        <option value="Сірий">Сірий</option>
                        <option value="Жовтий">Жовтий</option>
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
            echo "<div class='bike-card' data-brand=".$bike['Marka']." data-bike-type=".$bike['Type']." data-wheel-size=".$bike['Tires']." data-brake-type=".$bike['Type_of_rear_bushing']." data-color=".$bike['Color'].">";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo "  <p>Ціна:".$bike['Price']."$</p> </div>"; 
            echo " <a href='/characteristics?id=".$bike['id']."'>";
            echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a> <div class='button-container-index'><a href='/?id=".$bike['id']."'> <button>Купити</button> </a>";
            echo "<a href='/?id_c=".$bike['id']."'>";
            $i=false;
            foreach($_SESSION['comparison'] as $res){
            if($bike['id']==$res['id']){echo "<button>Вилучити з порівняння</button>"; $i=true;}}
            if(!$i) {echo "<button>Додати до порівняння</button>";}
            echo "</a></div> </div>";
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