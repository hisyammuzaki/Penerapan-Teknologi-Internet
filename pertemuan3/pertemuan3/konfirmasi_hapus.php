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
    
    <form action= "proses_hapus.php?id=<?php echo $id_tamu ?>" method=post> 
        <h1>Konfirmasi Hapus</h1>
        <h2>Universitas Komputer Indonesia</h2>
        <hr> 
        <table border=1> 
        <?php 
        while ($res = mysqli_fetch_assoc($data)) {
            echo "
            <tr> <td> Nama <td>".$res['nama_tamu']." 
            <tr> <td> No. Telp <td>".$res['notelp_tamu']."
            <tr> <td> Alamat <td>".$res['alamat_tamu']." 
            <tr> <td> Pesan <td>".$res['pesan_tamu']." 
            ";
        }
        ?>
        </table>
        <br>
        <input type=submit value="Konfirmasi Hapus"> 
        </form> 
        <hr> 
        <br> 

</body> 

</center>
</html> 
