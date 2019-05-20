<?php
   session_start();
   require_once("koneksi.php");

   $username = $_POST['username'];
   $pass = $_POST['password'];
   
   $cekuser = mysqli_query($koneksi, "select * from login where username='$username' and password='$pass'");
   
   $hasil = mysqli_fetch_assoc($cekuser);

   if (mysqli_num_rows($cekuser) > 0) {
      $_SESSION['username'] = $hasil['username'];

      if ($hasil['admin'] == 1) {
         header('Location: HalAdmin.php');
      } else {
         header('Location: home.php');
      }
	} else {
      echo "<div align='center'>User dan password salah! <a href='login.php'>Back</a></div>";
	}
?>