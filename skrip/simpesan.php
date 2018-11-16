<?php
   header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header("Cache-Control: no-cache");
   header("Pragma: no-cache");
   
   include_once("koneksi.php");
   
   if (isset($_POST["pemakai"]))
      $pemakai = $_POST["pemakai"];
   else
      $pemakai = "";
      
   if (isset($_POST["pesan"]))   
      $pesan = $_POST["pesan"];
   else
      $pesan = "";   

   // Kalau $pemakai atau $pesan kosong, akhiri
   if (empty($pemakai) or empty($pesan))
      exit();

   // lakukan penyimpanan  
   $sql = "INSERT INTO chat (waktu, pemakai, pesan) " .
          "VALUES (NOW(), '$pemakai', '$pesan')";
   mysql_query($sql, $id_mysql);  
   mysql_close($id_mysql);
?>
