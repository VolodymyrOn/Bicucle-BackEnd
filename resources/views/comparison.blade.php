<?php 
include(public_path().'\func.php');
if(isset($_GET['id'])){ addToCart($_GET['id']); echo "<script>location.href='/comparison';</script>"; }
if(isset($_GET['id_c'])){ addToComparison($_GET['id_c']); echo "<script>location.href='/comparison';</script>"; }
$query="SELECT * FROM bicucles";
$res=mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/icon.png" type="image/png">
    <style>
        /* Зберігаємо стилі для header */
header {
    background-color: #111;
    color: #fff;
    padding: 5px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999; /* Збільшуємо z-index, щоб header був найвище */
}

/* Зберігаємо стилі для nav */
nav {
    background-color: #333;
    color: #fff;
    padding: 5px;
    display: flex;
    justify-content: space-between; /* Розташування по краях */
    align-items: center;
    height: 50px;
    position: fixed;
    top: 100px; /* Розташовуємо після header */
    left: 0;
    right: 0;
    z-index: 9999; /* Збільшуємо z-index, щоб nav був найвище після header */
}

/* Зберігаємо стилі для footer */
footer {
    background-color: #111;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    
}

.main {
    background-color: #333;
    border-radius: 5px;
    padding: 5px;
    margin: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    flex-grow: 1;
    z-index: 0; /* Знижуємо z-index, щоб main був нижче за header, nav та footer */
    position: fixed; /* Зафіксовуємо main */
    top: 160px; /* Задаємо відстань від верху, щоб уникнути перекриття header і nav */
    bottom: 70px; /* Задаємо відстань від низу, щоб уникнути перекриття footer */
    left: 0;
    right: 0;
    overflow: auto;
    overflow-x: auto;
    z-index: 99999;}
    
    .td_res {
        white-space: wrap;
    min-width: 550px;
    max-width: 550px;

}


</style>
    <title>Порівняння</title>
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
        <div id="notification" class="notification">
        Товар додано до корзини
    </div>
    <main class="main">
    <?php 
        if(!isset($_SESSION['comparison'])||$_SESSION['comp_count']==0){ echo "<h1 style='text-align: center;'>В порівнянні пусто</h1>";
            echo "<div class='button-container'> <a href='/'> <button>Головна</button> </a>";}
        else{
        echo "<div class='comparison-container'> <div class='bike-cards-container'> <div class='vl'></div>";
        $i=false;
        foreach($res as $bike){
            foreach($_SESSION['comparison'] as $elem)
            if($bike['id']==$elem['id']){
            if($i==1){echo "<div class='vl1'></div>";}

            $i=true;
            echo "<div class='bike-card-comparison'> <img src='image/vibor_rami_11.jpg' alt='Велосипед 1'>  <h3>".$bike['Marka']." ".$bike['Model']."</h3> <div class='button-container-comparison'>";
            echo "<a href='/comparison?id=".$bike['id']."'> <button>Купити</button> </a>";
            echo "<a href='/comparison?id_c=".$bike['id']."'> <button>Видалити з порівняння</button> </a></div> </div>";}
        } echo "</div>";
    
        echo "
        <div class='characteristics-container'> 
        <table class='bike-comparison'>
            <tr>
                <th></th>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<th class='td_res'>".$bike['Marka']."</th>";}}
                    $res=mysqli_query($db,'Select * from characteristics');
                    
                    echo "</tr><tr> <td>Діаметр колеса</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Wheel diameter']."</td>";}}
                    

                    echo "</tr><tr> <td>Касета</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Cassette']."</td>";}}
                    
                    echo "</tr><tr> <td>Ручки перемикання</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Shifters']."</td>";}}

                    echo "</tr><tr> <td>Обода</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Rim']."</td>";}}

                    echo "</tr><tr> <td>Педалі</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Pedals']."</td>";}}

                    echo "</tr><tr> <td>Передні гальма</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Front brakes']."</td>";}}

                    echo "</tr><tr> <td>Передній перемикач</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Front derailleur']."</td>";}}

                    echo "</tr><tr> <td>Покришки</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Tires']."</td>";}}

                    echo "</tr><tr> <td>Рама</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Frame']."</td>";}}

                    echo "</tr><tr> <td>Рульова колонка</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Steering column']."</td>";}}

                    echo "</tr><tr> <td>Гальмівні ручки</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Brake levers']."</td>";}}

                    echo "</tr><tr> <td>Кермо</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Handlebar']."</td>";}}

                    echo "</tr><tr> <td>Сідло</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Saddle']."</td>";}}

                    echo "</tr><tr> <td>Підсідельний штир</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Seatpost']."</td>";}}

                    echo "</tr><tr> <td>Шатуни</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Cranks']."</td>";}}

                    echo "</tr><tr> <td>Вилка</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Fork']."</td>";}}

                    echo "</tr><tr> <td>Втулки</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Bushes']."</td>";}}

                    echo "</tr><tr> <td>Винос</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Bearing']."</td>";}}

                    echo "</tr><tr> <td>Задні гальма</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Rear brakes']."</td>";}}

                    echo "</tr><tr> <td>Задній перемикач</td>";
                    foreach($res as $bike){foreach($_SESSION['comparison'] as $elem)
                    if($bike['id']==$elem['id']){echo "<td class='td_res'>".$bike['Rear derailleur']."</td>";}}

    
    }

    ?>
            </tr>
        </table>
        </div>
    </div>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script src="scripts/comparison.js"></script>
</body>
</html>