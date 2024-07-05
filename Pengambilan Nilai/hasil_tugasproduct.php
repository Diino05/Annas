<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
    <td colspan=2 align="center"><b>Product</b></td>
    </tr>
    <tr>
    <td>Type Product : <?php echo $_POST["typeproduct"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Product : <?php echo $_POST["product"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Cust Product Code : <?php echo $_POST["custcode"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Qty : <?php echo $_POST["Qty"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Unit : <?php echo $_POST["unit"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Price : <?php echo $_POST["Price"];?></td>
    </tr>
    </table>
    <br>
    <a href="tugasproduct.php">Add Product</a>
</body>
</html>