<head>
    <title>Tambah Data Penjualan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script language="javascript">

function cekform(){
    
    if(document.frmpenjualan.kode_barang.value==""){
        alert('kode_barang Harus Diisi');
        document.frmpenjualan.kode_barang.focus();
        return false;
    } else if(document.frmpenjualan.nama_barang.value==""){
        alert('Nama barang Harus Diisi');
        document.frmpenjualan.nama_barang.focus();
        return false;
    } else if(document.frmpenjualan.harga.value==""){
        alert('Harga Harus Diisi');
        document.frmpenjualan.harga.focus();
        return false;    
    } else if(document.frmpenjualan.jumlah.value==""){
        alert('Jumlah Harus Diisi');
        document.frmpenjualan.jumlah.focus();
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
    <h2 align="center">Tambah Data Penjualan</h2>
    <form action="" method="post" name="frmpenjualan" onsubmit="return cekform()">
    <table width="500" border="0" align="center">
        <div class="container">
        <tr>
            <td width="163">Kode Barang </td>
            <td width="321"><input name="kode_barang" type="text" id="kode_barang" size="5" maxlength="5" /></td>
        </tr>

        <tr>
            <td>Nama Barang </td>
            <td><input name="nama_barang" type="text" id="nama_barang" /></td>
        </tr>

        <tr>
            <td>Harga Barang</td>
            <td><input name="harga" type="text" id="harga" /></td>
        </tr>

        <tr>
            <td>Jumlah Pembelian</td>
            <td><input name="jumlah" type="text" id="jumlah" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input name="tblIsi" class="btn btn-primary" type="submit" id="tblIsi" value="Tambah Pembelian" /></td>
        </tr>
    </table>
</div>
</form>
</body>
</html>

<?php
    include "koneksiDB.php";

    if(isset($_POST['tblIsi'])){
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        
    $sql = "INSERT INTO tbl_penjualan VALUES('$kode_barang','$nama_barang','$harga','$jumlah')";
    $query = mysql_query($sql);
    
    if($query){
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        echo mysql_error();
    }
}
?>