<?php 
require ('dbconfig.php');
$id_tamu = $_GET['id']; 
$nama_tamu=$_POST['nama']; 
$alamat_tamu=$_POST['alamat']; 
$notelp_tamu=$_POST['notelp']; 
$pesan_tamu=$_POST['pesan']; 

 //form validasi 
 if ($nama_tamu == "" || $alamat_tamu == "" || $notelp_tamu == "" || $pesan_tamu == ""){
    header("location:daftar_tamu_update.php?id=$id_tamu&pesan=gagal");
    //Menghentikan proses kebawah
    die;
}  

//membuat waktu sekarang 

$date = date("Y-m-d H:i");
$query = "UPDATE buku_tamu SET
    nama_tamu = '$nama_tamu', 
    alamat_tamu = '$alamat_tamu', 
    notelp_tamu = '$notelp_tamu', 
    pesan_tamu = '$pesan_tamu', 
    tanggal_bertamu = '$date' WHERE id = $id_tamu"; 

 
$result = mysqli_query($mysqli,$query);

if ($result) {
    //Jika berhasil 
    header("location:daftar_tamu.php"); 
    die;
} else {  
    echo "Error: " . "<br>" . mysqli_error($mysqli); 
} 


?>