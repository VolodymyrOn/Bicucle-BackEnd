<?php
        include(public_path().'\func.php');
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
<div class="order-container">
        <div class="order-fields">
            <form>
                <label for="lastname">Прізвище:</label>
                <input type="text" id="lastname" name="lastname" required placeholder="Введіть прізвище">
    
                <label for="firstname">Ім’я:</label>
                <input type="text" id="firstname" name="firstname" required placeholder="Введіть ім’я">
    
                <label for="middlename">По батькові:</label>
                <input type="text" id="middlename" name="middlename" required placeholder="Введіть по батькові">
    
                <label for="phone">Номер телефону:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Введіть номер"> 
    
                <label for="city">Населений пункт:</label>
                <input type="text" id="city" name="city" required placeholder="Введіть населений пункт">
    
                <label for="street">Вулиця:</label>
                <input type="text" id="street" name="street" required placeholder="Введіть вулицю">
    
                <label for="house">Будинок:</label>
                <input type="text" id="house" name="house" required placeholder="Введіть номер будинку/квартиру">
    
                <label for="payment-method">Спосіб оплати:</label>
                <select id="payment-method" name="payment-method">
                    <option value="card">Кредитною карткою</option>
                    <option value="cash">Готівкою при отриманні</option>
                </select>
    
            </form>
        </div>
    </div>
    
    <div class="bike-container">
        <div class="bike-cards-container">
            <div class="bike-card-order">
                <a href="characteristics.html">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                </a>
                <div class="bike-info-order">
                    <h2>Велосипед 1</h2>
                    <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                    <p class="price">Ціна: $500</p><br>
                    <p>Кількість: 1 шт.</p>
                </div>
            </div>
        </div>
        <div class="bike-cards-container">
            <div class="bike-card-order">
                <a href="characteristics.html">
                    <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
                </a>
                <div class="bike-info-order">
                    <h2>Велосипед 1</h2>
                    <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                    <p class="price">Ціна: $500</p><br>
                    <p>Кількість: 1 шт.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="button-container">
        <a href="/purchase-notification">
            <button>Оформити замовлення</button>
        </a>
        <button>Очистити корзину</button>
    </div>
</main>
<footer>
    <p>&copy; 2023</p>
</footer>
    <script src="scripts/basket1.js"></script>
</body>
</html>
