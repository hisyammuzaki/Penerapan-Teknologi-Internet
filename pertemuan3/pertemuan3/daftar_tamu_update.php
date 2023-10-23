<?php
//Session akan dibahas pada materi selanjutnya
include "session_check.php";
?>
<html>

<head>
<title>Buku Tamu</title> 
</head> 
<center>
    <?php 
    require('dbconfig.php');

        $id_tamu = $_GET["id"]; 

        //jika Id Tamu tidak ""
        if ($id_tamu == "") {
            header("location:input_daftar_menu.php"); 
            die; 
        } 

        $data = mysqli_query($mysqli,"SELECT * FROM buku_tamu where id= $id_tamu LIMIT 1" );
        
        
        ?>
        <body> 

        <form action= "proses_update_tamu.php?id=<?php echo $id_tamu ?>" method=post>
        <h1>FORM UPDATE BUKU TAMU</h1> 
        <h2>Universitas Komputer Indonesia</h2>
        <hr> 

        <table>
        <?php 
        while ($res = mysqli_fetch_assoc($data)) { 
            echo " 
            <tr> <td> Nama <td> <input type=text name=nama value='".$res["nama_tamu"]."' >
            <tr> <td> No. Telp <td> <input type=number name=notelp value=".$res["notelp_tamu"]." > 
            <tr> <td> Alamat <td> <textarea name=alamat rows=4 cols=50 >".$res["alamat_tamu"]." </textarea>
            <tr> <td> Pesan <td> <textarea name=pesan rows=4 cols=50>".$res["pesan_tamu"]." </textarea>
            "; 
        }
        ?>
        </table>
        <input type=submit value=Simpan>
    </form> 
    <hr>
    <a href='daftar_tamu.php?'>Kembali ke Daftar Tamu</a>
    <br>
    <?php 
    if (!emptyempty($_GET["pesan"])) { 
        //jika pesan gagal 
        if ($_GET["pesan"] == "gagal"){ 
            echo "<p>Form wajib diisi semua</p>";
        }  
    }
    ?>
    </body>
</center> 
</html>