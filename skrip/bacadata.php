<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Membaca Data Pribadi</title>
</head>
<body>
<?php
  include_once("koneksi.php");

  // Peroleh yang dicari
  if (isset($_GET["dicari"]))    
     $nama_dicari = $_GET["dicari"];
  else
     $nama_dicari = "";
      
  // Bagian untuk membaca data
  $sql = "SELECT kode, nama, tgl_lahir FROM pribadi" .
         " where nama LIKE '%$nama_dicari%' ORDER BY nama";
      
  $hasil = mysql_query($sql, $id_mysql);
  if (! $hasil)
     die("Salah SQL");	 
?>   
   
<table id="id_tabel" border="1">
   <thead>
      <tr><th>Kode</th><th>Nama</th><th>Tanggal Lahir</th></tr>
      </thead>
      <tbody>
      <?php
  	     while ($baris = mysql_fetch_row($hasil))    
	     {
	        $kode = $baris[0];
            $nama = $baris[1];
	        $tgl_lahir = $baris[2];
	        
	        $thn = substr($tgl_lahir,0,4);
	        $bln = substr($tgl_lahir,5,2);
	        $tgl = substr($tgl_lahir,8,2);
	        
            print("<tr><td>$kode</td><td>$nama</td>" . 
                  "<td>$tgl/$bln/$thn</td></tr>");
	     }
	     // Akhir pembacaan data
	
         mysql_close($id_mysql);
      ?>
      
   </tbody>
</table>
</body>
</html>
