 <?php
 require_once "KoneksiDB.php";
 if($_SERVER['REQUEST_METHOD']=="POST"){
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $jeniskelamin=$_POST['jeniskelamin'];
 $wa=$_POST['wa'];
 $sqlsave="INSERT INTO tbldosen VALUES
('$nip','$nama','$alamat','$jeniskelamin','$wa')";
 if(mysqli_query($koneksi,$sqlsave)){
 echo "<script> alert('Data sudah disimpan');
window.location.assign('TampilData.php'); </script>";
 }
 }
 