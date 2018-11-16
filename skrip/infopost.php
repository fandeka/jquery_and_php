<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Info Post</title>
</head>
<body>
<?php
   // Periksa apa ada variabel bernama "id"
   // Kalau isinya kosong akhiri dengan pesan
   if (!empty($_POST['nama']))
      print('Nama: ' . $_POST['nama'] . '<br />');
   if (!empty($_POST['hobby']))
      print('Hobby: ' . $_POST['hobby'] . '<br />');   
      
   print('Sudah diproses di server!');   
?>
</body>
</html>
