<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $type_produk = $_POST["type_produk"];
  $produk = $_POST["produk"];
  $cust_produk_code = $_POST["cust_produk_code"];
  $qty = $_POST["qty"];
  $unit = $_POST["unit"];
  $price = $_POST["price"];
  $subtotal = $_POST["subtotal"];

  echo "Type Produk: $type_produk<br>";
  echo "Produk: $produk<br>";
  echo "Cust Produk Code: $cust_produk_code<br>";
  echo "Qty: $qty<br>";
  echo "Unit: $unit<br>";
  echo "Price: $price<br>";
  echo "Subtotal: $subtotal<br>";
}
?>
<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
</form>
<a href="latujian.php">Add Product</a>
</body>
</html>