<?php 
include(public_path().'\func.php');
if(isset($_POST['submit'])){ unset($_POST); addToCart($_GET['id']);  echo "<script>location.href='/characteristics?id=".$_GET['id']."';</script>";}

if(isset($_GET['id_c'])){ addToComparison($_GET['id_c']); echo "<script>location.href='/characteristics?id=".$_GET['id']."';</script>"; }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/icon.png" type="image/png">
    <title>Характеристики</title>
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
    <main class="main">

        <?php
        $id=$_GET['id'];
        $query="SELECT * from bicucles where id='$id'";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_all($db_res, MYSQLI_ASSOC);
        foreach($res as $bike){
            echo "<div class='bike-card'>";
            echo "<div class='bike-info'>";
            echo "<h2>".$bike['Marka'].' '.$bike['Model']."</h2>";
            echo "<p>Ціна: ".$bike['Price']."$</p> </div>"; 
            echo "<img src='image/velo/".$bike['Marka'].' '.$bike['Model'].".jpg' alt='Велосипед 1'>  <div class='button-container-index'> ";
            echo "<div class='button-container-index'>";
            echo "<form style='margin: 0' method='POST'>";?>
            {{method_field('post')}} 
            @csrf
            <?php echo "<button type='submit' value='submit' name='submit'>Купити</button> </form> </div>";
             echo "<a href='/characteristics?id_c=".$bike['id']."&id=".$bike['id']."'>";
            $i=false;
            foreach($_SESSION['comparison'] as $res){
            if($id==$res['id']){echo "<button>Вилучити з порівняння</button>"; $i=true;}}
            if(!$i) {echo "<button>Додати до порівняння</button>";}
        }
           ?>

    </a>
    </div>
    </div>


        <div class="bike-description">
        <?php
        $query="SELECT * from characteristics where Velo_id='$_GET[id]'";
        $db_res=mysqli_query($db, $query);
        $res=mysqli_fetch_assoc($db_res); ?>

            <h3>Характеристики велосипеда:</h3>
            <table>
                <tr>
                    <td>Діаметр колеса:</td>
                    <td>
                        <?php echo $res['Wheel diameter']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Касета:</td>
                    <td><?php echo $res['Cassette']; ?></td>
                </tr>
                <tr>
                    <td>Ручки перемикання:</td>
                    <td><?php echo $res['Shifters']; ?></td>
                </tr>
                <tr>
                    <td>Обода:</td>
                    <td><?php echo $res['Rim']; ?></td>
                </tr>
                <tr>
                    <td>Педалі:</td>
                    <td><?php echo $res['Pedals']; ?></td>
                </tr>
                <tr>
                    <td>Передні гальма:</td>
                    <td><?php echo $res['Front brakes']; ?></td>
                </tr>
                <tr>
                    <td>Передній перемикач:</td>
                    <td><?php echo $res['Front derailleur']; ?></td>
                </tr>
                <tr>
                    <td>Покришки:</td>
                    <td><?php echo $res['Tires']; ?></td>
                </tr>
                <tr>
                    <td>Рама:</td>
                    <td><?php echo $res['Frame']; ?></td>
                </tr>
                <tr>
                    <td>Рульова колонка:</td>
                    <td><?php echo $res['Steering column']; ?></td>
                </tr>
                <tr>
                    <td>Гальмівні ручки:</td>
                    <td><?php echo $res['Brake levers']; ?></td>
                </tr>
                <tr>
                    <td>Кермо:</td>
                    <td><?php echo $res['Handlebar']; ?></td>
                </tr>
                <tr>
                    <td>Сідло:</td>
                    <td><?php echo $res['Saddle']; ?></td>
                </tr>
                <tr>
                    <td>Підсідельний штир:</td>
                    <td><?php echo $res['Seatpost']; ?></td>
                </tr>
                <tr>
                    <td>Шатуни:</td>
                    <td><?php echo $res['Cranks']; ?></td>
                </tr>
                <tr>
                    <td>Вилка:</td>
                    <td><?php echo $res['Fork']; ?></td>
                </tr>
                <tr>
                    <td>Втулки:</td>
                    <td><?php echo $res['Bushes']; ?></td>
                </tr>
                <tr>
                    <td>Винос:</td>
                    <td><?php echo $res['Bearing']; ?></td>
                </tr>
                <tr>
                    <td>Задні гальма:</td>
                    <td><?php echo $res['Rear brakes']; ?></td>
                </tr>
                <tr>
                    <td>Задній перемикач:</td>
                    <td><?php echo $res['Rear derailleur']; ?></td>
                </tr>
            </table>
        </div>
        <div class="offers">
            <h3>Інші пропозиції:</h3>
            <?php 
            $off1=mysqli_query($db,"SELECT * FROM bicucles where id=$_GET[id]");
            $r=mysqli_fetch_assoc($off1);
            $off=mysqli_query($db,"SELECT * FROM bicucles where (Type='{$r['Type']}' or Marka='{$r['Marka']}' or Color='{$r['Color']}') and  id!={$r['id']}");
            foreach($off as $bike){    
            echo "<div class='bike-card-offers'>
                <a href='characteristics?id=".$bike['id']."'>
                    <img src='image/velo/".$bike['Marka'].' '.$bike['Model'].".jpg' alt='Велосипед 1'>
                </a>
                <h2>".$bike['Marka'].' '.$bike['Model']."</h2>
                <p>Ціна: ".$bike['Price']."$</p>
            </div>";}
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="scripts/basket.js"></script>
</body>
</html>