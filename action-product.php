<?php
$product_id = $_GET['product_id'];
?>
<div>
<div>

<h1>
<?php
  echo $arr_product[$product_id]['name'];
?>
</h1>
</div>

<div>
<?php
  echo $arr_product[$product_id]['description'];
?>
</div>

<div>
<?php
  echo $arr_product[$product_id]['price'];
?> ron
</div>

<div>
<a href="index.php?action=add-to-cart&product_id=<?php echo $product_id; ?>">
add to cart
</a>
</div>
</div>
