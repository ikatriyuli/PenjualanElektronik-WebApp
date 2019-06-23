<!DOCTYPE html>
<head>
    <title>Laporan Data Barang</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


<?php
include "menubarang.php";
?>

</head>

<body>

<div class="table-responsive">
<table class="table table-bordered table-striped">
    <br>
  <h2 class="text-center">Data Barang</h2>
  
        <tr>
            <th width="25" scope="col">No</th>
            <th width="103" scope="col">Kode Barang </th>
            <th width="128" scope="col">Nama Barang </th>
            <th width="128" scope="col">Jenis Barang </th>
            <th width="60" scope="col">Harga</th>
            <th width="81" scope="col">Persediaan</th>
            <th width="82" scope="col">Action Edit</th>
            <th width="82" scope="col">Action Delete</th>
        </tr>

<?php
    include "koneksiDB.php";
    $sql = "SELECT * FROM tbl_barang";
    $kueri = mysql_query($sql);
    $no = 1;
    
    while($data = mysql_fetch_array($kueri)){
    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php 
        echo $data['kode_barang']?></td>
        <td><?php echo $data['nama_barang']?></td>
        <td><?php echo $data['jenis_barang']?></td>
        <td><?php echo $data['harga_satuan']?></td>
        <td><?php echo $data['persediaan_barang']?></td>
        <td>
            <a href="editbarang.php?kode=<?php echo $data['kode_barang']?>">Edit</a> </td>
            <td><a href="delete.php?kode=<?php echo $data['kode_barang']?>">Delete</a></td>
    </tr>
    
<?php
    $no++;}
?>
    </table>
</body>
</html>