<?php
   header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header("Cache-Control: no-cache");
   header("Pragma: no-cache");
   
   require_once("koneksi.php");

   // Cek keberadaan variabel id
   if (isset($_GET["id"]))  
      $id_akhir = $_GET["id"]; 
   else
      $id_akhir = "";
      
   // Cek isi $id_akhir   
   if (empty($id_akhir))
      $sql =  "SELECT * FROM " . 
           "(SELECT * FROM chat ORDER BY id_pesan DESC LIMIT 5) AS chat5" .
           " ORDER BY id_pesan DESC";
   else
      $sql = "SELECT * FROM chat WHERE id_pesan > '$id_akhir'";
      
   $hasil = mysql_query($sql);

   $teks = "";
   $id_akhir = "";
   if ($hasil) {
      while ($baris = mysql_fetch_row($hasil)) {
         $id_pesan = $baris[0];
         
         if (empty($id_akhir))
            $id_akhir = $id_pesan;
            
         $waktu = $baris[1];
         $pemakai = $baris[2];
         $pesan = $baris[3];
                
         $teks = $teks . 
            "<label class='cl-waktu-pemakai'>[$waktu: $pemakai]</label> " .
            "<label class='cl-pesan'>$pesan</label><br />";
      }
   }    
   
   mysql_close($id_mysql);

   if (!empty($teks))   
      $teks = $teks . "*id_akhir=" . $id_akhir;
      
   print($teks);
?>          
