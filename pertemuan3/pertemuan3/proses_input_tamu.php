<?php 
// menyisipkan file
require ('dbconfig.php'); 
$nama_tamu=$_POST['nama']; 
$alamat_tamu=$_POST['alamat'];
$notelp_tamu=$_POST['notelp']; 
$pesan_tamu=$_POST['pesan']; 

//form validasi 
if ($nama_tamu == "" || $alamat_tamu == "" || $notelp_tamu == "" || $pesan_tamu == ""){ 
    header("location:input_daftar_menu.php?pesan=gagal");

    //Menghentikan proses kebawah 
    exit; 
} 

//membuat waktu sekarang

$date = date("Y-m-d H:i:s");

 //mysqli bersalah dari file dbconfig
 $result = mysqli_query($mysqli, 
 "INSERT INTO `buku_tamu` (`id`, `nama_tamu`, `alamat_tamu`, `notelp_tamu`, `pesan_tamu`, `tanggal_bertamu`) 
 VALUES (NULL, '$nama_tamu', '$alamat_tamu', '$notelp_tamu', '$pesan_tamu', '$date');
 ");
 if ($result) { 
    //Jika berhasil 
    header("location:daftar_tamu.php");
    exit;
} else {
    echo "Error: " . "<br>" . mysqli_error($mysqli); 
}


?>
