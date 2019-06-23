<head> 
    <title>Tambah Data Barang</title>
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

<?php
    include "menubarang.php";
?>
    <br>
    <h2 align="center">Tambah Data Barang</h2>
    
    <form action="" class="form-horizontal" method="post" name="frmbarang" onsubmit="return cekform()">
    <table width="500" border="0" align="center">
    <div class="container">
        
    <div class="form-group">
    <tr>
        <td width="163">Kode Barang </td>
        <td width="321"><input name="kode_barang" type="text" id="kode_barang" size="5" maxlength="5" /></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
        <td>Nama Barang </td>
        <td><input name="nama_barang" type="text" id="nama_barang" /></td>
    </tr>
    </div>
    
    <div class="form-group">
    <tr>
        <td>Jenis Barang</td>
        <td><input name="jenis_barang" type="text" id="jenis_barang" /></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
        <td>Harga</td>
        <td><input name="harga_barang" type="text" id="harga_barang" /></td>
    </tr>
    </div>
    
    <div class="form-group">
    <tr>
        <td>Persediaan</td>
        <td><input name="persediaan_barang" type="text" id="persediaan_barang" /></td>
    </tr>
    </div>
    
    <div class="form-group">
    <tr>
        <td>&nbsp;</td>
        <td><input name="tblIsi" class="btn btn-danger" type="submit" id="tblIsi" value="Tambah Barang" /></td>
    </tr>
    </div>


</div>
    </table>

</form>
</body>
</html>

<?php

    include "koneksiDB.php";

    if(isset($_POST['tblIsi'])){
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $harga_barang = $_POST['harga_barang'];
        $persediaan = $_POST['persediaan_barang'];
    
    $sql = "INSERT INTO tbl_barang VALUES('$kode_barang','$nama_barang','$jenis_barang','$harga_barang','$persediaan')";
    
    $query = mysql_query($sql);
    
    if($query){
    
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
    
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        echo mysql_error();
    }
}
?>