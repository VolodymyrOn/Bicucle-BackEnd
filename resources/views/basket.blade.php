 <?php
    /*    $query="SELECT * from Pizza";
        $link=mysqli_connect("localhost","root","","orgesta");
        $db_res=mysqli_query($link, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC);
        $i=0;
        foreach($res as $pizza){
            if($i==4) $i=0;
            if($i==0) echo "<div class='product-line'>";
            echo "<div class='product-box'> <div class='product-image'> <img src='".$pizza['Img']."' alt='Знак'></div>";
            echo "<h3>".$pizza['Name']."</h3> <a href='./menu.php?id=".$pizza['ID']."'>Додати в кошик</a>  <p>Ціна: ".$pizza['Price']." грн.</p>  </div>";
            $i++;
            if($i==4) echo "</div>";
        }*/
      ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<header>
    <h1>Корзина</h1>
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
<main class="main">
    <div class="bike-card">
        <a href="/characteristics">
            <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
        </a>
        <div class="bike-info">
            <h2>Велосипед 1</h2>
            <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
            <p>Ціна: $500</p>
        </div>
        <div class="quantity-container">
            <div class="quantity-controls">
                <label for="quantity">Кількість товару:</label>
                <button class="decrement" onclick="decrementQuantity()">-</button>
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                <button class="increment" onclick="incrementQuantity()">+</button>
            </div>
        </div>
        <div class="button-container">
            <button>Підтвердити купівлю</button>
            <button>Скасувати купівлю</button>
        </div>
    </div>
</main>
<footer>
    <p>&copy; 2023</p>
</footer>
    <script src="scripts/basket1.js"></script>
</body>
</html>
