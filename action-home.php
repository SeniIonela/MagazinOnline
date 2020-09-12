<?php //am definit și folosit variabila $product_id, o variabilă php, în care, la
//fiecare ciclu nou, se va încărca și stoca ID-ul urmatorului produs din structura de tip array a bazei de date.
//Valoarea parametrului product_id, se va schimba, de la ciclu la ciclu, deoarece, în fiecare ciclu, ID-ul
//produsului este diferit.
//Pentru a genera corect datele din URL, ca valoare a parametrului product_id, se va seta valoarea
//variabilei $product_id.
  foreach ($arr_product as $product_id => $product) {
?>
<div>
<div>

<a href="index.php?action=product&product_id=<?php echo $product_id; ?>">
<?php
  echo $product['name'];
?>
</a>
</div>
<div>
  <?php
    echo $product['description'];
  ?>
</div>
<div>
  <?php
    echo $product['price'];
  ?> ron
</div>
<a href="index.php?action=product&product_id=
  <?php
    echo $product_id; ?>">
    <?php
//echo $product['name'];
?>
</a>
</div>
<hr>

<?php
}
