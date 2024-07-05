<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hasil_tugas6.php"method="post">
<h1> Masukan Data Diri Anda :</h1>
<pre>
    Nama                : <input type="text"name="nama"><br>
    Alamat              : <textarea name="alamat"rows="5"cols="25"></textarea><br>
    Tempat Lahir        : <input type="text"name="tempatlahir"><br>
    Tanggal Lahir       : <input type="date"name="ttl"><br>
    Jenis Kelamin       : <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
    Pendidikan          : <select name="pendidikan">
<option value="S3">S3</option>
<option value="S2">S2</option>
<option value="S1">S1</option>
<option value="D3">D3</option>
<option value="SMA/SMK">SMA/SMK</option>
<option value="SMP">SMP</option>
<option value="SD">SD</option>
</select><br>
<input type="submit"value="Submit"> <input type="reset"value="Cancel">
</pre>
</form>
</body>
</html>