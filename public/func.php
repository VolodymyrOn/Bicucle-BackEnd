<?php
	$host="localhost"; 
	$username="root";
	$password="";
	$dbname="laravel";	

	$db=mysqli_connect($host, $username, $password, $dbname);
  
session_start();
if(isset($_SESSION['Basket'])){}else{$_SESSION['Basket']=0;}
if(isset( $_SESSION['comp_count'])){}else{ $_SESSION['comp_count']=0;}
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

/*function addToComparison($Id) {
  if (!isset($_SESSION['comparison'])) {
   $_SESSION['comparison'] = array();
 }



if($_SESSION['comp_count']==0){
  $have=false;
}

if (!$have) {
  $newItem = array('id' => $Id);;
  $_SESSION['comparison'][] = $newItem;
  $have=true;
}

 foreach ($_SESSION['comparison'] as $key => &$item) {
    if ($item['id'] == $Id) {
      unset($_SESSION['comparison'][$key]);
      $_SESSION['comp_count']-=1;
    }
    $have=false;
    
    break;
  }
 



 $_SESSION['comp_count']+=1;
}*/

function addToComparison($Id) {
  if (!isset($_SESSION['comparison'])) {
    $_SESSION['comparison'] = array();
  }

  $isInComparison = false;

  foreach ($_SESSION['comparison'] as $key => $item) {
    if ($item['id'] == $Id) {
      unset($_SESSION['comparison'][$key]);
      $_SESSION['comp_count'] -= 1;
      $isInComparison = true;
      break;
    }
  }

  if (!$isInComparison) {
    $newItem = array('id' => $Id);
    $_SESSION['comparison'][] = $newItem;
    $_SESSION['comp_count'] += 1;
  }
}


function removeFromComparison($Id) {
 if (isset($_SESSION['comparison'])) {
   foreach ($_SESSION['comparison'] as $key => &$item) {
     
       if ($item['id'] == $Id) {
         unset($_SESSION['comparison']);
         $_SESSION['comp_count']-=1;
       }
       
       break;
     }
   }
 }

?>