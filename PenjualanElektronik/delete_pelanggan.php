<?php

  if(isset($_GET['id_pelanggan'])){
    include "koneksiDB.php";
  
   $id_pelanggan = $_GET['id_pelanggan'];
   $sql = "DELETE FROM tbl_pelanggan WHERE id_pelanggan='$id_pelanggan'";
   $query = mysql_query($sql);
   if($query){
       
    echo "<script>alert('Data barang berhasil dihapus');document.location='lihat_pelanggan.php'</script>";
   } else{
   echo "<script>alert('Data barang Gagal dihapus');document.location='lihat_pelanggan.php'</script>";
   } else {
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='lihat_pelanggan.php'</script>";
  }
}

?>