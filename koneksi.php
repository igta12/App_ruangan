<?php
$conn = mysqli_connect('localhost','root','','peminjaman');

include"koneksi.php";

if(isset($_POST['simpan'])){
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

      mysqli_query($conn,"insert into user values('','$nama_lengkap','$email','$nohp','$username','$password','$level')");
      echo "<script>alert ('Data Berhasil Disimpan') </script>";
      echo"<meta http-equiv='refresh' content=0; URL=index.php>";
}

?>