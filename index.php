<?php
$koneksi = mysqli_connect("localhost","root","","pepus") or die("Gagal Koneksi Database");
echo "Sukses Koneksi database";
?>

<html>
<body>
<br><br>
<table border="3">
<tr>
<th>ID Anggota</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>No HP</th>
<th>Action</th>
</tr>

<?php
$query = "select * from anggota";
$data = mysqli_query($koneksi,$query) or die("Gagal query:".$query);
?>

<?php while($v=mysqli_fetch_array($data)):;?>
<tr>
<td><?php echo $v["ID_Anggota"];?></td>
<td><?php echo $v["Nama"];?></td>
<td><?php echo $v["Jenis_Kelamin"];?></td>
<td><?php echo $v["Alamat"];?></td>
<td><?php echo $v["No_HP"];?></td>
<td>
<a href="aksi_hapus.php?id_anggota=<?php echo $v["ID_Anggota"];?>">Hapus</a>
<a href="formupdate.php?id_anggota=<?php echo $v["ID_Anggota"];?>">Edit</a>
</td>
						
</tr>
<?php endwhile;?>
</table>
<a href="inputandata.php">Masukan Data</a>
</body>
</html>