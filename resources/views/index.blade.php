<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/atb.png" type="image/png">
    <title>BikeShop</title>
</head>
<body>
    <header>
        <h1>Веломагазин</h1>
    </header>
    <nav> 
        <a href="index.blade.php">Каталог</a>
        <a href="about-us.blade.php">Про нас</a>
        <a href="comparison.blade.php">Порівняння</a>
        <a class= "basket-button" href="/basket">
            <img class= "basket" src="image/basket2.png" alt="Корзина">
          </a>
    </nav>
    <div class="container">
        <aside class="sidenav">
            <div class="sidebar">
              <h2>Фільтр</h2>
              <form id="filterForm">
                <label for="make">Марка:</label>
                <select id="make" name="make" onchange="populateModels(this.value); toggleModelAndYear(this)">
                  <option value="">Виберіть марку</option>
                  <option value="BMW">BMW</option>
                  <option value="Ford">Ford</option>
                  <option value="Honda">Honda</option>
                  <option value="Lada">Lada</option>
                </select>
                <label for="model">Модель:</label>
                <select id="model" name="model" disabled></select>
                <label for="year">Рік:</label>
                <select id="year" name="year" disabled>
                  <option value="">Виберіть рік</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                </select>
                <button type="submit">Фільтрувати</button>
              </form>
            </div>
        </aside>
    <main class="main">
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="image/vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
        <div class="bike-card">
            <div class="bike-info">
                <h2>Велосипед 1</h2>
                <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p>
                <p>Ціна: $500</p>
            </div>
            <img src="vibor_rami_11.jpg" alt="Велосипед 1">
            <div class="button-container">
                <button>Купити</button>
                <button>До порівняння</button>
            </div>
        </div>
    </main>
</div>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
