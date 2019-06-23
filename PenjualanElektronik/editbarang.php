<?php
  include "koneksiDB.php";

   $kode = $_GET['kode'];
   $sql = "SELECT * FROM tbl_barang WHERE kode_barang='$kode'";
   $nomor = 101;
   $query = mysql_query($sql);
   $data = mysql_fetch_array($query);
   
   $kode_barang = $data['kode_barang'];
   $nama_barang = $data['nama_barang'];
   $jenis_barang = $data['jenis_barang'];
   $harga = $data['harga_satuan'];
   $persediaan = $data['persediaan_barang'];
?>

<html>
<head>
  <title>Edit Data Barang</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

<script language="javascript">

  function cekform(){
    
    if(document.frmbarang.kode_barang.value==""){
        alert('Kode Barang Harus Diisi');
        document.frmbarang.kode_barang.focus();
        return false;
    } else if(document.frmbarang.nama_barang.value==""){
        alert('Nama Barang Harus Diisi');
        document.frmbarang.nama_barang.focus();
        return false;
    } else if(document.frmbarang.jenis_barang.value==""){
        alert('Jenis Barang Harus Diisi');
        document.frmbarang.jenis_barang.focus();
        return false;    
    } else if(document.frmbarang.harga_barang.value==""){
        alert('Harga Barang Harus Diisi');
        document.frmbarang.harga_barang.focus();
        return false;
    } else if(document.frmbarang.persediaan_barang.value==""){
        alert('Persediaan Barang Harus Diisi');
        document.frmbarang.persediaan_barang.focus();
        return false;
    } else {
        return true;
    }
}
  </script>
</head>
<body>

<h2 align="center">Edit Barang</h2>
<form action="" method="post" name="frmbarang" onsubmit="return cekform()">
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
      <td>Jenis Barang</td>
      <td><input name="jenis_barang" type="text" id="jenis_barang" /></td>
    </tr>

    <tr>
      <td>Harga</td>
      <td><input name="harga_barang" type="text" id="harga_barang" /></td>
    </tr>

    <tr>
      <td>Persediaan</td>
      <td><input name="persediaan_barang" type="text" id="persediaan_barang" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input name="tblEdit" class="btn btn-primary" type="submit" id="tblEdit" value="Edit Barang" /></td>
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
    $jenis_barang = $_POST['jenis_barang'];
    $harga = $_POST['harga_satuan'];
    $persediaan = $_POST['persediaan_barang'];
    
    $sql = "UPDATE tbl_barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang',harga_satuan='$harga', persediaan_barang='$persediaan' WHERE kode_barang='$kode_barang'";
    
    $query = mysql_query($sql);
    
    if($query){
    
        echo "<script>alert('Data barang berhasil diedit'); document.location='lihat_barang.php'</script>";
    } else {
        echo "<script>alert('Data barang gagal diedit')</script>";
        
        echo mysql_error();
    }
}

?>
