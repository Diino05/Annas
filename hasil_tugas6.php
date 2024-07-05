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
    <td colspan=2 align="center"><b>Data Diri</b></td>
    </tr>
    <tr>
    <td>Nama : <?php echo $_POST["nama"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Alamat : <?php echo $_POST["alamat"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Tempat Lahir : <?php echo $_POST["tempatlahir"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Tanggal Lahir : <?php echo $_POST["ttl"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Jenis Kelamin : <?php echo $_POST["jenis_kelamin"];?></td>
    </tr>
    <br>
    <br>
    <tr>
    <td>Pendidikan : <?php echo $_POST["pendidikan"];?></td>
    </tr>
    </table>
    <br>
    <a href="tugas6.php">Back To Home</a>
</body>
</html>