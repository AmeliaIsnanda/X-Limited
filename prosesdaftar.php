<?php
   include ('koneksi.php');

   $email = $_POST['email'];
   $ttl = $_POST['ttl'];
   $jk = $_POST['jk'];
   $nohp = $_POST['nohp'];
   $alamat = $_POST['alamat'];
   $username = $_POST['username'];
   $pass = $_POST['password'];

   $cekuser = mysqli_query($koneksi, "SELECT * FROM login WHERE email = '$email'");
   if(mysqli_num_rows($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $sqlinsert = mysqli_query($koneksi, "INSERT INTO login (email, ttl, jk, nohp, alamat, username, password, admin )
        VALUES ( '$email', '$ttl', '$jk', '$nohp', '$alamat', '$username','$pass', 0)");
       
       if($sqlinsert) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>