 <?php
  require_once "KoneksiDB.php";
 $nip = $_GET['nip'];
 $delete="DELETE FROM tblDosen WHERE nip='$nip'";
 if(mysqli_query($koneksi,$delete)){
 echo "<script> alert('Data sudah dihapus');
window.location.assign('TampilData.php'); </script>";
 }else{ 
 echo "<script> alert('Data gagal dihapus');
window.location.assign('TampilData.php'); </script>";
 }
 