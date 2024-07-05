<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasil_tugasproduct.php"method="post">
   <h1> Add Product </h1>
   <pre>
    Type Product                    : <select type="text"name="typeproduct"isRequired='true'><br>
<option value="select">Please select a Type Product</option>
<option value="Bim">Bim</option>
<option value="Trs">Trs</option>
</select><br>
    Product                         : <textarea name="product"rows="2"cols="25"></textarea><br>
    Cust Product Code               : <textarea name="custcode"rows="2"cols="25"></textarea><br>
    Qty                             : <input type="number"name="Qty"placeholder=" "><br>
    Unit                            : <select name="unit">
<option value="select">Please select a Unit</option>
<option value="Kaca">Kaca</option>
<option value="Keramik">Keramik</option>
<option value="Plastik">Plastik</option>
<option value="Kaleng">Kaleng</option>
<option value="Besi">Besi</option>
</select><br>
    Price                           : <input type="number"name="Price"placeholder=" "><br>
<input type="submit"value="Submit"> <input type="reset"value="Cancel">
</pre>
</form>
</body>
</html>