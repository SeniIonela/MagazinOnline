<?php
//var_dump($_SESSION['cart']);
//die;
  if (count($_SESSION['cart']) > 0) {
?>
<table>
<thead>
<tr>
<td>
Name
</td>
<td>
Quantity
</td>

<td>
Price/unit
</td>

<td>
Price/line
</td>
</tr>
</thead>

<tbody>
<?php
  $total = 0.0; //Am definit variabila php $total și am inițializat valoarea acesteia cu 0.0
  foreach ($_SESSION['cart'] as $product_id => $quantity) { //Am definit această variabilă înaintea ciclului foreach, deoarece trebuie să accesăm
//valoarea finală stocată și înafara ciclului.

  ?>
<tr>
<td>
<?php
  echo $arr_product[$product_id]['name'];
?>
</td>
<td>
  <?php
    echo $quantity;
  ?>
</td>
<td>
  <?php
    echo $arr_product[$product_id]['price']; //In urmatorul pas, vom afisa moneda, 'hardcodata' in cod.
  ?> ron
</td>
<td>
  <?php
    $price_line = $quantity*$arr_product[$product_id]['price'];//Mai ramane sa calculam pretul total al produselor din cosul de cumparaturi si sa
//afisam informatia pe interfata.
    echo $price_line;
    $total += $price_line;
  ?> ron
</td>
</tr>
  <?php
}
?>
<tr>
<td colspan="4">
  Total: <?php echo $total; ?> ron
</td>
</tr>
</tbody>

</table>
  <?php
} else {
  echo 'cosul de cumparaturi este gol';
}
