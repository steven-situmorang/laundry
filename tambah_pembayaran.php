<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="add_proses_pembayaran.php" method="post">
        <table align="center" border="0">
            <td>kode konsumen</td>
                <td>:</td>
            <td>
                <input type="text" name="kd_konsumen">
</td></tr>
<tr>
<td>kode cucian kotor</td>
                <td>:</td>
            <td>
                <input type="text" name="kd_ck">
</td></tr>
<td>nama</td>
                <td>:</td>
            <td>
                <input type="text" name="nama">
</td></tr>
<td>no_telepon</td>
                <td>:</td>
            <td>
                <input type="text" name="no_telepon">
</td></tr>
<td>qty</td>
                <td>:</td>
            <td>
                <input type="text" name="qty">
</td></tr>
<td>harga</td>
                <td>:</td>
            <td>
                <input type="text" name="harga">
</td></tr>
<tr>
    <td><input type="submit" value="submit"></td></tr>
        </table>
</body>


