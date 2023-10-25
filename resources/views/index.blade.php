<?php 
include(public_path().'\func.php');
if(isset($_GET['id'])){ addToCart($_GET['id']); }
?>
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
            <span id="cart-count" class="cart-count"><?php echo $_SESSION['Basket']; ?></span>
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
        
        
                  
        
                    <button type="submit">Фільтрувати</button>
                </form>
            </div>
        </aside>
    <main class="main">
        <?php
        $query="SELECT * from bicucles";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC);
        foreach($res as $bike){
            echo "<div class='bike-card'>";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo " <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p> <p>Ціна:".$bike['Price']."$</p> </div>"; 
            echo " <a href='/characteristics?id=".$bike['id']."'>";
            echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a> <div class='button-container'><a href='/?id=".$bike['id']."'> <button>Купити</button> </a>";
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