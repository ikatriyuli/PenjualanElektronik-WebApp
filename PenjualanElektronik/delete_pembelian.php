<?php

if(isset($_GET['kode_barang'])){
   include "koneksiDB.php";
   
   $kodebarang = $_GET['kode_barang'];
   $sql = "DELETE FROM tbl_pembelian WHERE kode_barang='$kodebarang'";
   $query = mysql_query($sql);
   
   if($query){
       
    echo "<script>alert('Data barang berhasil dihapus');document.location='lihat_pembelian.php'</script>";
   } else{
   echo "<script>alert('Data barang Gagal dihapus');document.location='lihat_pembelian.php'</script>";
   } else {
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='lihat_pembelian.php'</script>";
  }
}
?>