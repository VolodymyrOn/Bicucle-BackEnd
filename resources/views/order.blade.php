<?php
        include(public_path().'\func.php');

        if(isset($_POST['submitdb'])){
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $street = $_POST['street'];
            $house = $_POST['house'];
            $paymentMethod = $_POST['payment-method'];
            $order='';
            foreach($_SESSION['cart'] as $bike){
                $res=mysqli_query($db,"SELECT Marka, Model, Color from bicucles where id={$bike['id']}");
                foreach($res as $res1){
                    $bikedb=$res1['Marka']." ".$res1['Model']." ".$res1['Color'];
                }
                $order=$order."  ".$bikedb." (" . $bike['id'] . "): " . $bike['quantity'] . "; ";
            }
            $_SESSION['Order']=$order;
            unset($_SESSION['cart']);
            $_SESSION['Basket']=0;

            $sql = "INSERT INTO orders (velo_id ,surname, name, patronymic, phone_number, city, street, house_number, payment, Total_price)
            VALUES ( '$order', '$lastname', '$firstname', '$middlename', '$phone', '$city', '$street', '$house', '$paymentMethod', '{$_SESSION['Tot_p']}')";
            mysqli_query($db,$sql);
            $_SESSION['lastInsertedId'] = mysqli_insert_id($db);
            unset($POST);
            echo "<script>location.href='/purchase-notification';</script>";

        } 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/png">
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
        <form method="POST" action="">
            {{method_field('post')}} 
            @csrf
                <label for="lastname">Прізвище:</label>
                <input type="text" id="lastname" name="lastname" required placeholder="Введіть прізвище" pattern="[A-Za-zА-Яа-яЁёІіЇїЄєҐґ]+">
            
                <label for="firstname">Ім’я:</label>
                <input type="text" id="firstname" name="firstname" required placeholder="Введіть ім’я" pattern="[A-Za-zА-Яа-яЁёІіЇїЄєҐґ]+">
            
                <label for="middlename">По батькові:</label>
                <input type="text" id="middlename" name="middlename" required placeholder="Введіть по батькові" pattern="[A-Za-zА-Яа-яЁёІіЇїЄєҐґ]+">
            
                <label for="phone">Номер телефону:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Введіть номер" pattern="\+38[0-9]{10}" value="+380">
            
                <label for="city">Населений пункт:</label>
                <input type="text" id="city" name="city" required placeholder="Введіть населений пункт" pattern="[A-Za-zА-Яа-яЁёІіЇїЄєҐґ]+">
            
                <label for="street">Вулиця:</label>
                <input type="text" id="street" name="street" required placeholder="Введіть вулицю" pattern="[A-Za-zА-Яа-яЁёІіЇїЄєҐґ]+">
            
                <label for="house">Будинок:</label>
                <input type="text" id="house" name="house" required placeholder="Введіть номер будинку/квартиру">
            
                <label for="payment-method">Спосіб оплати:</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="card">Кредитною карткою</option>
                    <option value="cash">Готівкою при отриманні</option>
                </select>
                <?php echo "<h1>Сума: {$_SESSION['Tot_p']} $</h1>";?>
          
        </div>
    </div>
    
    <div class="bike-container">

        <?php
            if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $elem){
                $query = "SELECT * FROM bicucles WHERE ID = " . $elem['id'];
                $res=mysqli_query($db, $query);
                $bike=mysqli_fetch_assoc($res);   
                
                
                echo "<div class='bike-cards-container'>
                    <div class='bike-card-order'>
                        <a href='/characteristics?id=".$bike['id']."'>
                            <img src='image/velo/".$bike['Marka'].' '.$bike['Model'].".jpg' alt='Велосипед 1'>
                        </a>
                        <div class='bike-info-order'>
                        <h2>".$bike['Marka'].' '.$bike['Model']."</h2>
                            <p class='price'>Ціна: ".$bike['Price']."</p><br>
                            <p>Кількість: {$elem['quantity']} шт.</p>
                        </div>
                    </div>
                </div>";
                }}
        
        ?>
        
        </div>
    <div class="button-container">
    {{method_field('post')}} 
            <button type='submitdb' value='submitdb' name='submitdb'>Оформити замовлення</button>
    </form>
    </div>
</main>
<footer>
    <p>&copy; 2023</p>
</footer>
    <script src="scripts/basket1.js"></script>
</body>
</html>
