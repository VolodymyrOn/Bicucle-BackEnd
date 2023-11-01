<?php
        include(public_path().'\func.php');
       
        if(isset($_POST['submit'])){
            unset($_SESSION['Basket']);
            unset($_SESSION['cart']);
            echo "<script>location.href='/basket';</script>";
            exit();
            }
       
        if (isset($_GET['id'])) {
            if ($_GET['oper'] == '-') {
            removeFromCart($_GET['id']);
            echo "<script>location.href='/basket';</script>";
        }
        elseif ($_GET['oper'] == '+') {
            addToCart($_GET['id']);    
            echo "<script>location.href='/basket';</script>";
        }
        header("Location: koshyk.php");
    }
        $query="SELECT * from bicucles";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC); 


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
                <span id="cart-count-index" class="cart-count-index">0</span>
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


        <!-- 
            echo "<div class='bike-card'>";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo " <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p> <p>Ціна:".$bike['Price']."$</p> </div>"; 
            echo " <a href='/characteristics?id=".$bike['id']."'>";
            echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a> <div class='button-container'> <button>Купити</button>";
            echo " <button>До порівняння</button> </div> </div>";

         -->
         <main class="main">
         {{method_field('post')}} 
         @csrf
        <?php
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $elem){
                    $query = "SELECT * FROM bicucles WHERE ID = " . $elem['id'];
                    $res=mysqli_query($db, $query);
                    $bike=mysqli_fetch_assoc($res);
                    echo "<div class='bike-card'>";
                    echo " <a href='/characteristics?id=".$bike['id']."'>";
                    echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a>";
                    echo "<div class='bike-info-order'>";
                    echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
                    echo " <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p> <p>Ціна:".$bike['Price']."$</p> </div>"; 
                    echo "<div class='quantity-container-order'>";
                    echo "<div class='quantity-controls-order'>";
                    echo "<label for='quantity'>Кількість товару:</label>";

                    echo "<a href='/basket?id=".$elem['id']."&oper=-'><button class='decrement'>-</button></a>";
                    echo   $elem['quantity'];
                    echo "<a href='/basket?id=".$elem['id']."&oper=%2B'><button class='increment'>+</button></a>";
                    /*
                    echo "<button class='decrement' onclick='decrementQuantity()'>-</button>";
                    echo "<input type='number' id='quantity' name='quantity' min='1' value='1'>";
                    echo "<button class='increment' onclick='incrementQuantity()'>+</button>";
                    */

                    echo "</div> </div> </div>";
                }

            }
            else{
                echo "<h1 style='text-align: center;'>Кошик порожній</h1>";
                echo "<div class='button-container'> <a href='/'> <button>Головна</button> </a>";
            }
        ?>
   
            <?php  
                if(isset($_SESSION['cart']))
                    echo "<div class='button-container'> <a href='/order'> <button>Оформити замовлення</button> </a>";
                    echo "<form style='margin: 0' method='POST'>";?>
                    {{method_field('post')}} 
                    @csrf
                   <?php if(isset($_SESSION['cart'])) echo "<button type='submit' value='submit' name='submit'>Очистити корзину</button> </form> </div>";
            ?>


</main>
<footer>
    <p>&copy; 2023</p>
</footer>
    <script src="scripts/basket1.js"></script>
</body>
</html>
