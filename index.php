<?php
  session_start();
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

  include 'db-product.php';
  include 'action.php';
  include 'html.php';
