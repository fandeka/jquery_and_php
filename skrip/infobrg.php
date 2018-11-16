<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Info Stok Barang</title>
</head>
<body>
<?php
   // Periksa apa ada variabel bernama "id"
   // Kalau isinya kosong akhiri dengan pesan
   if (empty($_GET['id']))
      die('Masukkan kode barangnya untuk mengetahui stok.');
   
   // menghasilkan informasi jumlah barang
   print('Stok barang: ' . rand(0, 150));
?>
</body>
</html>
