<?php
include "koneksi.php";

$id_update_barang = $_GET['update'];

$upd_barang= mysqli_query($koneksi,"select  *  from cucian_masuk where kd_konsumen ='$id_update_barang' ");
$upd = mysqli_fetch_array($upd_barang);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button yang digunakan untuk membuka contact form - dipasang di bagian bawah halaman */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* form popup  - disembunyikan secara default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Tambahkan styles ke container form  */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Lebar maksimum untuk field input */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Saat inputan menjadi fokus, lakukan sesuatu */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* atur a style untuk submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Tambahkan warna merah untuk button cancel */
.form-container .cancel {
  background-color: red;
}

/* Tambahkan beberapa efek hover ke button */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button class="open-button" onclick="openForm()" align="center">Buka Form</button>

<div class="form-popup" id="myForm">
  <form action="edit_proses_cucian_masuk.php" class="form-container" method="post" align="center">
    <h1>Edit</h1>

    <table border="0" align="center">
          <tr>
              <td align="center" class="pink">kode cucian masuk</td>
              <td>:</td>
          <td align="center">
              <input readonly type="text" name="kd_cm" value="<?php echo $upd['kd_cm'];?>">
</td></tr>
<td align="center" class="pink">Konsumen</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="kd_konsumen" value="<?php echo $upd['kd_konsumen'];?>">
</td></tr>
<td align="center" class="pink">tanggal cucian masuk</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="tanggal_cm" value="<?php echo $upd['tanggal_cm'];?>">
</td></tr>
<td align="center" class="pink">jenis laundry</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="jenis_laundry" value="<?php echo $upd['jenis_laundry'];?>">
</td></tr>
<td align="center" class="pink">qty</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="qty" value="<?php echo $upd['qty'];?>">
</td></tr>
<tr>
    <td>
    <button type="submit" class="btn">simpan</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</td>
</tr>
</table>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
