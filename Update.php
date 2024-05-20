 <?php
 require_once "KoneksiDB.php";
 if($_SERVER['REQUEST_METHOD']=="POST"){
 $nip=$_POST['nip']; 
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $jeniskelamin=$_POST['jeniskelamin'];
 $wa=$_POST['wa'];
 $sqlupdate="UPDATE tbldosen SET nama='$nama',
alamat='$alamat',jeniskelamin='$jeniskelamin', wa='$wa' WHERE nip='$nip'"; 
 if(mysqli_query($koneksi,$sqlupdate)){
 echo "<script> alert('Data sudah diupdate');
window.location.assign('TampilData.php'); </script>";
 }
 }
 