<?php 
	$host="localhost"; 
	$username="root";
	$password="";
	$dbname="laravel";	

	$db=mysqli_connect($host, $username, $password, $dbname);
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$query='SELECT * from orders where id='.$_SESSION['lastInsertedId'].'';
$res=mysqli_query($db,$query);
$res1=mysqli_fetch_assoc($res);
$current_time = date('Y-m-d H:i:s');
?>

<h1>Зроблено замовлення!</h1><br>
<?php echo "{$res1['Velo_id']}"; ?>
<p>Прізвище: <?php echo "{$res1['surname']}";?></p>
<p>Ім'я: <?php echo "{$res1['name']}";?></p>
<p>По батькові: <?php echo "{$res1['patronymic']}";?></p>
<p>Номер телефону: <?php echo "{$res1['phone_number']}";?></p>
<p>Адреса: <?php echo "{$res1['city']} {$res1['street']} {$res1['house_number']}";?></p>
<p>Тип оплати: <?php echo "{$res1['payment']}";?></p>
<p>Сума:<?php echo "{$res1['Total_price']}";?></p>
<p>Час: <?php echo "{$current_time}";?></p>
