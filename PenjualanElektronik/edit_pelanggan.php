<?php
  include "koneksiDB.php";

   $id_pelanggan = $_GET['id_pelanggan'];
   $sql = "SELECT * FROM tbl_pelanggan WHERE id_pelanggan='$id_pelanggan'";
   $nomor = 101;
   $query = mysql_query($sql);
   $data = mysql_fetch_array($query);
   
   $id_pelanggan = $data['id_pelanggan'];
   $nama_pelanggan = $data['nama_pelanggan'];
   $alamat = $data['alamat'];
   $telp = $data['telp'];
?>

<html>
<head>
    <title>Edit Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<script language="javascript">
  function cekform(){
    
    if(document.frmpelanggan.id_pelanggan.value==""){
        alert('Id Pelanggan Harus Diisi');
        document.frmpelanggan.id_pelanggan.focus();
        return false;
    } else if(document.frmpelanggan.nama_pelanggan.value==""){
        alert('Nama Pelanggan Harus Diisi');
        document.frmpelanggan.nama_pelanggan.focus();
        return false;
    } else if(document.frmpelanggan.alamat.value==""){
        alert('Alamat Harus Diisi');
        document.frmpelanggan.alamat.focus();
        return false;    
    } else if(document.frmpelanggan.telp.value==""){
        alert('Telepon Harus Diisi');
        document.frmpelanggan.telp.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>
<body>

<h2 align="center">Edit Pelanggan</h2>
<form action="" method="post" name="frmpelanggan" onsubmit="return cekform()">
  <table width="500" align="center">
    <div class="container">
    <tr>
      <td width="163">Id Pelanggan</td>
      <td width="321"><!-- textbox untuk kodebarang dibuat menjadi readonly. Ini karena field kodebarang adalah Primary Key, sehingga tidak boleh diedit-->
      <input name="id_pelanggan" type="text" id="id_pelanggan" size="5" maxlength="5" value="<?php echo $id_pelanggan ?>" readonly/></td>
    </tr>
  
    <tr>
      <td>Nama Pelanggan </td>
      <td><input name="nama_pelanggan" type="text" id="nama_pelanggan" /></td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td><input name="alamat" type="text" id="alamat" /></td>
    </tr>

    <tr>
      <td>No Telp</td>
      <td><input name="telp" type="text" id="telp" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input name="tblEdit" class="btn btn-primary" type="submit" id="tblEdit" value="Edit Pelanggan" /></td>
    </tr>

</table>
</div>
</form>
</body>
</html>

<?php

if(isset($_POST['tblEdit'])){
    
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
  
    $sql = "UPDATE tbl_pelanggan SET nama_pelanggan='$nama_pelanggan',alamat='$alamat', telp='$telp' WHERE id_pelanggan='$id_pelanggan'";
    $query = mysql_query($sql);
    
    if($query){
        echo "<script>alert('Data barang berhasil diedit'); document.location='lihat_pelanggan.php'</script>";
    } else {
        echo "<script>alert('Data barang gagal diedit')</script>";
        echo mysql_error();
    }
}

?>