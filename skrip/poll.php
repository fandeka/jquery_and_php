<?php
   header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header("Cache-Control: no-cache");
   header("Pragma: no-cache");

   include_once("koneksi.php");
   
   $isian = $_POST["isian"];
   if (empty($isian)) {
      exit();
   }
   
   // simpan data
   $pil1 = $pil2 = $pil3 = $pil4 = $pil5 = 0;
   
   switch ($isian) {
      case 1: $pil1 = 1; break;
      case 2: $pil2 = 1; break;
      case 3: $pil3 = 1; break;
      case 4: $pil4 = 1; break;
      case 5: $pil5 = 1; break;
   }
   
   $sql = "UPDATE jajak SET pil1 = pil1 + $pil1," .
                           "pil2 = pil2 + $pil2," .
                           "pil3 = pil3 + $pil3," .
                           "pil4 = pil4 + $pil4," .
                           "pil5 = pil5 + $pil5 " .
                           "WHERE id = 'website'";
   $hasil = mysql_query($sql, $id_mysql);

   mysql_close($id_mysql);
?>
