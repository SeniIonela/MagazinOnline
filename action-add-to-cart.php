<?php
$product_id = $_GET['product_id'];

if(isset($_SESSION['cart'][$product_id])){
  $_SESSION['cart'][$product_id]++; //marește cantitatea produsului cu 1 unitate.
}else{
  $_SESSION['cart'][$product_id]=1; //adaugă produsul in coș pentru prima dată.
}
header('Location: index.php?action=cart'); //vom seta parametrul predefinit Location și vom specifica
//unde să fie redirectionat utilizatorul, în acest caz, în pagina unde listam produsele din coșul de
//cumpăraturi.
