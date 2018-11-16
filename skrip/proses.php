<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Proses Barang</title>
</head>
<body>
<?php
   // Periksa apa ada variabel bernama "id"
   // Kalau isinya kosong akhiri dengan pesan
   if (!empty($_GET['id']))
      print('ID barang: ' . $_GET['id'] . '<br />');
   if (!empty($_GET['nama']))
      print('Nama barang: ' . $_GET['nama']);   
?>
</body>
</html>
