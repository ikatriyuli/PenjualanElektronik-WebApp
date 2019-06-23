<!DOCTYPE html>
<head>
    <title>Data Pelanggan</title>
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
  <h2 class="text-center">Data Pelanggan</h2>

    <tr>
        <th width="25" scope="col">No</th>
        <th width="103" scope="col">Id Pelanggan </th>
        <th width="128" scope="col">Nama Pelanggan </th>
        <th width="145" scope="col">Alamat </th>
        <th width="60" scope="col">Telp</th>
        <th width="82" scope="col">Action Edit</th>
        <th width="82" scope="col">Action Delete</th>
    </tr>

<?php
    include "koneksiDB.php";
    $sql = "SELECT * FROM tbl_pelanggan";
    $query = mysql_query($sql);
    $no = 1;
    while($data = mysql_fetch_array($query)){
    ?>
    
    <tr>
        <td><?php echo $no?></td>
        <td><?php 
        echo $data['id_pelanggan']?></td>
        <td><?php echo $data['nama_pelanggan']?></td>
        <td><?php echo $data['alamat']?></td>
        <td><?php echo $data['telp']?></td>
        <td>
            <a href="edit_pelanggan.php?kode=<?php echo $data['id_pelanggan']?>">Edit</a> </td>
            <td><a href="delete_pelanggan.php?kode=<?php echo $data['id_pelanggan']?>">Delete</a></td>
    </tr>
<?php
    $no++;}
?>
</table>
</body>
</html>