<!DOCTYPE html>
<head>
    <title>Data Penjualan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>

<?php
    include "menubarang.php";
?>

<div class="table-responsive">
<table class="table table-bordered table-striped">
    <br>
  <h2 class="text-center">Data Penjualan</h2>
    <tr>
        <th width="25" scope="col">No</th>
        <th width="103" scope="col">Kode Barang </th>
        <th width="128" scope="col">Nama Barang </th>
        <th width="145" scope="col">Harga </th>
        <th width="100" scope="col">Jumlah </th>
        <th width="82" scope="col">Action Edit</th>
        <th width="82" scope="col">Action Delete</th>
    </tr>

<?php
    include "koneksiDB.php";
    $sql = "SELECT * FROM tbl_penjualan";
    $query = mysql_query($sql);
    $no = 1;
    while($data = mysql_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php 
        echo $data['kode_barang']?></td>
        <td><?php echo $data['nama_barang']?></td>
        <td><?php echo $data['harga_barang']?></td>
        <td><?php echo $data['jumlah']?></td>
        <td>
            <a href="edit_penjualan.php?kode=<?php echo $data['kode_barang']?>">Edit</a> </td>
            <td><a href="delete_penjualan.php?kode=<?php echo $data['kode_barang']?>">Delete</a></td>
    </tr>

<?php
    $no++;}
?>
</table>
</body>
</html>