<head>
    <title>Tambah Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<script language="javascript">

  function cekform(){
    
    if(document.frmpelanggan.id_pelanggan.value==""){
        alert('Id pelanggan Harus Diisi');
        document.frmpelanggan.id_pelanggan.focus();
        return false;
    } else if(document.frmpelanggan.nama_pelanggan.value==""){
        alert('Nama pelanggan Harus Diisi');
        document.frmbarang.nama_pelanggan.focus();
        return false;
    } else if(document.frmpelanggan.alamat.value==""){
        alert('Alamat Harus Diisi');
        document.frmpelanggan.alamat.focus();
        return false;    
    } else if(document.frmpelanggan.telp.value==""){
        alert('Telp Harus Diisi');
        document.frmpelanggan.telp.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>

<body>

<?php
    include "menubarang.php";
?>
    <br>
    <h2 align="center">Tambah Data Pelanggan</h2>
    <form action="" method="post" name="frmpelanggan" onsubmit="return cekform()">
    <table width="500" border="0" align="center">
        <div class="container">
        <tr>
            <td width="163">Id Pelanggan </td>
            <td width="321"><input name="id_pelanggan" type="text" id="id_pelanggan" size="5" maxlength="5" /></td>
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
            <td><input name="tblIsi" class="btn btn-info" type="submit" id="tblIsi" value="Tambah Pelanggan" /></td>
        </tr>
    </table>
</div>
</form>
</body>
</html>

<?php
    include "koneksiDB.php";

    if(isset($_POST['tblIsi'])){
        $id_pelanggan = $_POST['id_pelanggan'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        
    $sql = "INSERT INTO tbl_pelanggan VALUES('$id_pelanggan','$nama_pelanggan','$alamat','$telp')";

    $query = mysql_query($sql);
    
    if($query){
    
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        echo mysql_error();
    }
}
?>