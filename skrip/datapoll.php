<?php
   header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header("Cache-Control: no-cache");
   header("Pragma: no-cache");

  include_once("koneksi.php");
 
  // Bagian untuk membaca data
  $sql = "SELECT pil1, pil2, pil3, pil4, pil5 FROM jajak" .
         " where id = 'website'";
      
  $hasil = mysql_query($sql, $id_mysql);
  if (! $hasil)
     die("Salah SQL");	 

  $baris = mysql_fetch_row($hasil);    
  $pil1 = $baris[0];
  $pil2 = $baris[1];
  $pil3 = $baris[2];
  $pil4 = $baris[3];
  $pil5 = $baris[4];
	
  mysql_close($id_mysql);
  
  // Tampilkan
  print("[ {");
  print("\"pil1\":" . $pil1 . "," );
  print("\"pil2\":" . $pil2 . "," );
  print("\"pil3\":" . $pil3 . "," );
  print("\"pil4\":" . $pil4 . "," );
  print("\"pil5\":" . $pil5 . "}" );
  print(" ]");
?>
