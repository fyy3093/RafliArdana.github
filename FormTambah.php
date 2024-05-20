 <h2>Tambah Data Dosen</h2>
<form action="Save.php" method="POST">
 <label>Nomor Identitas Dosen :</label>
 <input type="text" name="nip" placeholder="Nomor Identitas Dosen"
required>
 <br>
<label>Nama Dosen :</label>
<input type="text" name="nama" id="nama" placeholder="Nama Lengkap"required>
 <br>
 <label for="">Alamat :</label>
 <input type="text" name="alamat" id="alamat" placeholder="Alamat
Lengkap" required>
 <br>
 <label for="">jeniskelamin :</label>
 <select name="jeniskelamin" id="jeniskelamin">
 <option value="laki-laki" selected>laki-laki</option>
 <option value="perempuan">perempuan</option>
 <option value="lainnya">lainnya</option>
 </select>
 <br>
 <label for="">wa :</label>
 <input type="text" name="wa" id="wa" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Kirim Data</button>
 </form>