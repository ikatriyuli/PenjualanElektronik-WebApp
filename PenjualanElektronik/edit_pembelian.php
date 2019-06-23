<?php
  include "koneksiDB.php";

   $kode = $_GET['kode'];
   $sql = "SELECT * FROM tbl_pembelian WHERE kode_barang='$kode'";
   $nomor = 101;
   $query = mysql_query($sql);
   $data = mysql_fetch_array($query);
   
   $kode_barang = $data['kode_barang'];
   $nama_barang = $data['nama_barang'];
   $harga_barang = $data['harga_barang'];
   $jumlah = $data['jumlah'];
?>

<html>
<head>
  <title>Edit Data Pembelian</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

<script language="javascript">

function cekform(){
    
    if(document.frmpembelian.kode_barang.value==""){
        alert('Kode Barang Harus Diisi');
        document.frmpembelian.kode_barang.focus();
        return false;
    } else if(document.frmpembelian.nama_barang.value==""){
        alert('Nama Barang Harus Diisi');
        document.frmpembelian.nama_barang.focus();
        return false;
    } else if(document.frmpembelian.harga_barang.value==""){
        alert('Harga Barang Harus Diisi');
        document.frmpembelian.harga_barang.focus();
        return false;    
    } else if(document.frmpembelian.jumlah.value==""){
        alert('jumlah Barang Harus Diisi');
        document.frmpembelian.jumlah.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>
<body>

<h2 align="center">Edit Pembelian</h2>
<form action="" method="post" name="frmpembelian" onsubmit="return cekform()">
  <table width="500" align="center">
    <div class="container">
    <tr>
      <td width="163">Kode Barang </td>
      <td width="321">
      <input name="kode_barang" type="text" id="kode_barang" size="5" maxlength="5" value="<?php echo $kode_barang ?>" readonly/></td>
    </tr>
    
    <tr>
      <td>Nama Barang </td>
      <td><input name="nama_barang" type="text" id="nama_barang" /></td>
    </tr>

    <tr>
      <td>Harga Barang</td>
      <td><input name="harga_barang" type="text" id="harga_barang" /></td>
    </tr>

    <tr>
      <td>Jumlah</td>
      <td><input name="jumlah" type="text" id="jumlah" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input name="tblEdit" class="btn btn-primary" type="submit" id="tblEdit" value="Edit Pembelian" /></td>
    </tr>
</table>
</div>
</form>
</body>
</html>

<?php

if(isset($_POST['tblEdit'])){
    
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah = $_POST['jumlah'];
 
    $sql = "UPDATE tbl_pembelian SET nama_barang='$nama_barang', harga_barang='$harga_barang',jumlah='$jumlah' WHERE kode_barang='$kode_barang'";
    
    $query = mysql_query($sql);
    
    if($query){
    
        echo "<script>alert('Data barang berhasil diedit'); document.location='lihat_pembelian.php'</script>";
    } else {
        echo "<script>alert('Data barang gagal diedit')</script>";
        echo mysql_error();
    }
}

?>
    