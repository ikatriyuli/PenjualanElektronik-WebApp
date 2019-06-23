<head>
    <title>Tambah Data Pembelian</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

<script language="javascript">

function cekform(){
    
    if(document.frmpembelian.kode_barang.value==""){
        alert('kode_barang Harus Diisi');
        document.frmpembelian.kode_barang.focus();
        return false;
    } else if(document.frmpembelian.nama_barang.value==""){
        alert('Nama barang Harus Diisi');
        document.frmpembelian.nama_barang.focus();
        return false;
    } else if(document.frmpembelian.harga.value==""){
        alert('Harga Harus Diisi');
        document.frmpembelian.harga.focus();
        return false;    
    } else if(document.frmpembelian.jumlah.value==""){
        alert('Jumlah Harus Diisi');
        document.frmpembelian.jumlah.focus();
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
     <h2 align="center">Tambah Data Pembelian</h2>
    <form action="" method="post" name="frmpembelian" onsubmit="return cekform()">
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
            <td><input name="tblIsi" class="btn btn-warning" type="submit" id="tblIsi" value="Tambah Pembelian" /></td>
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
        
    
    $sql = "INSERT INTO tbl_pembelian VALUES('$kode_barang','$nama_barang','$harga','$jumlah')";
    
    $query = mysql_query($sql);
    
    if($query){
    
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
    
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        
        echo mysql_error();
    }
}
?>