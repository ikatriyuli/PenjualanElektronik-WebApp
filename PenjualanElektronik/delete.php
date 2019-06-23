<?php

  if(isset($_GET['kode_barang'])){
    include "koneksiDB.php";
   
     $kode = $_GET['kode_barang'];
     $sql = "DELETE FROM tbl_barang WHERE kode_barang='$kode'";
     $query = mysql_query($sql);
     if($query){
       
    echo "<script>alert('Data barang berhasil dihapus');document.location='lihat_barang.php'</script>";
   } else{
   echo "<script>alert('Data barang Gagal dihapus');document.location='lihat_barang.php'</script>";
   }
} else {
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='lihat_barang.php'</script>";
}
?>