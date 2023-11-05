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
    <title>BikeShop</title>
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
        </div>
    </nav>
    <main class="main">
        <div class="about-us">
            Ваше замовлення опрацьоване і занесене під номером <?php echo $_SESSION['lastInsertedId'] ; ?><br>
            До вас зателефонують в межах робочого часу.<br><br>
            <?php echo $_SESSION['Order'];?>

        </div>

        <div class="button-container">
            <a href="/">
                <button>Повернутись до каталогу</button>
            </a>
        </div>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
