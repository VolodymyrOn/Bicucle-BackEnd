<?php
        include(public_path().'\func.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/icon.png" type="image/png">
    <title>Про нас</title>
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
    </nav>
    <main class="main">
        <div class="about-us">
            Наша адреса офісу: м.Коломия вул.Тарабалки 20<br><br><br>
            Номер телефону менеджера:<br>
            Онищук В.І.: +380672505390<br><br><br>
            Електрона пошта для зв’язку:<br>
            qwerty123@gmail.com<br>
        </div>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
