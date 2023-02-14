<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah</title>
</head>
<body>
    <table border = "0">
        <h1>Tambah Data</h1>
        <form action="proses_tambah.php" method="POST">
            <tr>
                <td><label for="nama_toko">Nama Toko :</label></td>
                <td><input type="text" name="nama_toko" /></td>
</tr>
<tr>
    <td><label for="alamat">Alamat :</label></td>
    <td><input type="text" name="alamat" /></td>
</tr>
<tr>
    <td><label for="no_siup">No Siup :</label></td>
    <td><input type="number" name="no_siup" /></td>
</tr>
<tr>
    <td><label for="nama_pemilik">Nama Pemilik :</label></td>
    <td><input type="text" name="nama_pemilik" /></td>
</tr>
<tr>
    <td><label for="nama_bahan">Nama Bahan :</label></td>
    <td><input type="text" name="nama_bahan" /></td>
</tr>
<tr>
    <td><label for="satuan">Satuan :</label></td>
    <td><input type="text" name="satuan" /></td>
</tr>
<tr>
    <td><label for="harga">Harga :</label></td>
    <td><input type="text" name="harga" /></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="submit" /></td>
</tr>
</border>
</body>
</html>