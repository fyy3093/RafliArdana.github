<?php
 
  include "KoneksiDB.php";
 
$sqltampil = "SELECT * FROM tbldosen";
 
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1;
  ?>
 <h2>Data Dosen STMIK Royal</h2>
 <a href="FormTambah.php">Tambah Data</a>
 <table width="100%" border="1">
  <thead>
 <tr>
 <th>No</th>
 <th>nip</th>
 <th>Nama</th>
<th>Alamat</th>
 <th>jeniskelamin</th>
 <th>wa</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 while ($data = mysqli_fetch_assoc($query)) {
 ?>
 <tr>
 <td><?= $nomor ?></td>
 <td><?= $data['nip'] ?></td>
 <td><?= $data['nama'] ?></td>
 <td><?= $data['alamat'] ?></td>
 <td><?= $data['jeniskelamin'] ?></td>
 <td><?= $data['wa'] ?></td>
 <td>
 <a href="FormEdit.php?nip=<?=$data['nip']?>"> Edit</a> | <a href="Delete.php?nip=<?=$data['nip']?>">Delete</a>
 </td>
 </tr>
 <?php $nomor++;
 }  ?>
 </tbody>
 </table>