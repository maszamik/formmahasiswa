<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initialscale=1.0"> 
    <title>Data Mahasiswa</title> 
    
</head> 
<style>
        .warning {
            color: red;
        }
        body {
            padding-left: 30%;
            background: #ffd700;
        }
        h1 {
            padding-left: 20%;
        }
</style>
<body> 
<h1 >Data Mahasiswa</h1>
<?php
include "koneksi.php";
?>

<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
<th>Foto</th>
</tr>


<?php
$no=1;
$sql= mysqli_query($conn, "select * from mahasiswa order by nama");
while($data=mysqli_fetch_array($sql)){

?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['tanggal_lahir']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['jenis_kelamin']; ?></td>
<td><?php echo $data['jurusan']; ?></td>
<td><?php echo $data['foto']; ?></td>
</tr>
<?php
}
?>

</table>