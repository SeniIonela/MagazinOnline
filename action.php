<?php
$action = 'home';//Setăm pentru variabila PHP $action, valoarea home ca fiind acțiunea standard, nativă.
  if(isset($_GET['action'])){
    $action = $_GET['action'];
}
