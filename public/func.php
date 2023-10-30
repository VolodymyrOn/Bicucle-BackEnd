<?php
	$host="localhost"; 
	$username="root";
	$password="";
	$dbname="laravel";	

	$db=mysqli_connect($host, $username, $password, $dbname);
  
session_start();
if(isset($_SESSION['Basket'])){}else{$_SESSION['Basket']=0;}

function addToCart($Id) {
   if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  $found = false;
  foreach ($_SESSION['cart'] as &$item) {
    if ($item['id'] == $Id) {
      $item['quantity'] += 1;
      $found = true;
      break;
    }
  }

  if (!$found) {
    $newItem = array('id' => $Id, 'quantity' => 1);
    $_SESSION['cart'][] = $newItem;
  }

  $_SESSION['Basket']+=1;
}

function removeFromCart($Id) {
  if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => &$item) {
      if ($item['id'] == $Id) {
        $item['quantity'] -= 1;
        $_SESSION['Basket']-=1;
        if ($item['quantity'] <= 0) {
          unset($_SESSION['cart'][$key]);
        }
        if( $_SESSION['Basket']==0){
          unset($_SESSION['cart']);
        }
        
        break;
      }
    }
  }
}

?>