<?php
  include_once("koneksi.php");

  // Cek keberadaan variabel dicari
  if (isset($_GET["dicari"]))    
     $nama_dicari = $_GET["dicari"];
  else
     $nama_dicari = "";
      
  // Bagian untuk membaca data
  $sql = "SELECT nama, tgl_lahir FROM pribadi" .
         " where nama LIKE '%$nama_dicari%' ORDER BY nama";
      
  $hasil = mysql_query($sql, $id_mysql);
  if (! $hasil)
     die("Salah SQL");	 

  // Buat data dengan format JSON
  print("{ \"aaData\": [");
  $tambahan = "\n";
  while ($baris = mysql_fetch_row($hasil))  {
     $nama = $baris[0];
     $tgl_lahir = $baris[1];
	        
     $thn = substr($tgl_lahir,0,4);
     $bln = substr($tgl_lahir,5,2);
     $tgl = substr($tgl_lahir,8,2);
	        
     print($tambahan . "[\"$nama\"," . 
           "\"$tgl/$bln/$thn\"]");
     $tambahan = ",\n";      
  }
  
  print("\n] }\n");
  // Akhir pembacaan data
	
  mysql_close($id_mysql);
?>
