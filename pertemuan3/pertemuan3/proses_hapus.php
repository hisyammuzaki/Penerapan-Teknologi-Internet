<?php
require ('dbconfig.php');
$id_tamu=$_GET["id"];

$nama_tamu=$_POST['nama_tamu'];

$query = "DELETE FROM `buku_tamu` WHERE id = $id_tamu"; 

$result = mysqli_query($mysqli,$query);

if ($result) { 
    //Jika berhasil 
    header("location:daftar_tamu.php"); 
    exit;
} else { 
    echo "Error: " . "<br>" . mysqli_error($mysqli);
}

?>
