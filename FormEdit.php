<?php
 $nip=$_GET['nip'];
 $sqldata="SELECT * FROM tbldosen WHERE nip='$nip'";
 require_once "KoneksiDB.php";
 $query=mysqli_query($koneksi,$sqldata);
 $data=mysqli_fetch_assoc($query);
 ?>
 <h2>Update Data Dosen</h2>
 <form action="Update.php" method="POST">
 <label>Nip dosen :</label>
 <input type="text" name="nip"  value="<?=$data['nip']?>"
placeholder="Nip dosen" required>
 <br>
 <label>Nama Dosen :</label>
 <input type="text" name="nama" id="nama" value="<?=$data['nama']?>"
placeholder="nama" required>
 <br>
 <label for="">Alamat :</label>
 <input type="text" name="alamat" id="alamat"
value="<?=$data['alamat']?>" placeholder="alamat" required>
 <br>
 <label for="">jeniskelamin :</label>
 <select name="jeniskelamin" id="jeniskelamin">
<option value="<?=$data['jeniskelamin']?>"
selected><?=$data['jeniskelamin']?></option>
 <option value="laki-laki">laki-laki</option>
 <option value="perempuan">perempuan</option>
 <option value="lainnya">lainnya</option>
 </select>
 <br>
 <label for=""> wa :</label>
 <input type="text" name="wa" id="wa" value="<?=$data['wa']?>"
required>
 <br>
 <button type="submit" name="kirim" value="kirim">Update Data</button>
 </form