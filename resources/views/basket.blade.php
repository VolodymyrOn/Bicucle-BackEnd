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
        }
        <?php
    include 'DB_open.php';
    include 'func.php';
    if (isset($_GET['id'])) {
        if ($_GET['oper'] == '-') {
        removeFromCart($_GET['id']);
    }
    elseif ($_GET['oper'] == '+') {
        addToCart($_GET['id']);
       
    }
    header("Location: koshyk.php");
}
    if(isset($_POST['submit'])){
        unset($_SESSION['cart']);
        header('Location: menu.php');
        exit();
        }
    if(isset($_SESSION['cart'])){
    if(isset($_POST['submitdb'])){
        $arr="";
        $tot_price=0;
        foreach($_SESSION['cart'] as $elem){
         $query = "SELECT Name, Price FROM pizza WHERE ID = " . $elem['id'];
        $res=mysqli_query($link, $query);
        $res=mysqli_fetch_assoc($res);
        $arr = $arr . " " . $res['Name'] . ":" . $elem['quantity'] . " ";
        $tot_price+=$elem['quantity']*$res['Price'];
        }
        $query="INSERT INTO orders(Pizza, Tot_price) VALUES ('".$arr."',".$tot_price.");";
        mysqli_query($link, $query);
        $lastInsertedId = mysqli_insert_id($link);
        unset($_SESSION['cart']);
    }}
?>

    <section class="content">
    <?php
        if(isset($_SESSION['cart'])){
        $total=0;
        echo "<div>";
        echo "<table>";
        echo "<tr>";
        echo "<th style='width: 25%;'>Назва</th>";
        echo "<th style='width: 25%;'>Вартість</th>";
        echo "<th style='width: 25%;'>Кількість</th>";
        echo "<th style='width: 25%;'></th>"; 
        echo "</tr>";
     
        foreach ($_SESSION['cart'] as $elem) {
            $query = "SELECT Name, Price FROM pizza WHERE ID = " . $elem['id'];
            $res=mysqli_query($link, $query);
            $res=mysqli_fetch_assoc($res);
            $price=$elem['quantity']*$res['Price'];
            $total+=$price;
            echo "<tr>";
            echo "<td>".$res['Name']."</td>";
            echo "<td>".$res['Price']."</td>";
            echo "<td>";
            echo "<a href='./koshyk.php?id=".$elem['id']."&oper=-'>-</a>"."\t\t\t";
            echo   $elem['quantity'];
            echo "<a href='./koshyk.php?id=".$elem['id']."&oper=%2B'>+</a>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "<p style='text-align: center;'>Сума: ".$total." грн."."</p>";
        echo "<form style='text-align: center;' action='' method='post'>";
        echo "<input type='submit' name='submit' value='Очистити кошик'>";
        echo "<input type='submit' name='submitdb' value='Замовити'>";
        echo "</form>";
    }
        else 
             if(isset($_POST['submitdb'])){ echo "<p style='text-align: center;'>Ваше замовлення під номером: ".$lastInsertedId."</p>";
         echo "<p style='text-align: center;'>".$arr."</p>";
            echo "<p style='text-align: center;'>Зателефонуйте за номером: +380 98 678 89 09 і скажіть номер замовлення та вашу адресу</p>";
            }
            else{
            echo "<p style='text-align: center;'>Кошик порожній</p>";
            }
    ?>

      </section>
</body>
</html>
        
        */
      ?> 


<?php
 
        include(public_path().'\func.php');
       
       
        if (isset($_GET['id'])) {
            if ($_GET['oper'] == '-') {
            removeFromCart($_GET['id']);
        }
        elseif ($_GET['oper'] == '+') {
            addToCart($_GET['id']);    
        }
        header("Location: koshyk.php");
    }
        $query="SELECT * from bicucles";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC); 
        var_dump($_SESSION['cart']);
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

        <!-- 
            echo "<div class='bike-card'>";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo " <p>Це опис велосипеда 1. Він дуже крутий і швидкий.</p> <p>Ціна:".$bike['Price']."$</p> </div>"; 
            echo " <a href='/characteristics?id=".$bike['id']."'>";
            echo "<img src='image/vibor_rami_11.jpg' alt='Велосипед 1'> </a> <div class='button-container'> <button>Купити</button>";
            echo " <button>До порівняння</button> </div> </div>";

         -->
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
