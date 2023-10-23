<?php
//Session akan dibahas pada materi selanjutnya
include "session_check.php";
?>
<html> 

<head> 
   <title>Buku Tamu</title> 
</head>
<center>

    <body>
    <form action=proses_input_tamu.php method=post>
         <h1>FORM BUKU TAMU</h1>
         <h2>Universitas Komputer Indonesia</h2>
         <hr>
         <table>
         <tr> <td> Nama <td> <input type=text name=nama>
         <tr> <td> No. Telp <td> <input type=number name=notel p>
         <tr> <td> Alamat <td> <textarea name=alamat rows=4 cols=50> </textarea>
         <tr> <td> Pesan <td> <textarea name=pesan rows=4 cols=50> </textarea>
         </table>
         <input type=submit value=Simpan> <input type=reset value=Reset>
         </form> 
    <hr>
    <a href='daftar_tamu.php'>Kembali ke Daftar Tamu</a> 
    <br> 
    <?php
    if (!empty($_GET["pesan"])) { 
        //jika pesan gagal 
        if ($_GET["pesan"] == "gagal"){ 
            echo "<p>Form wajib diisi semua</p>";
        } 
    }
    ?>
 </body>
 </center> 
 </html>

