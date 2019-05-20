<?php
include 'koneksi.php';

// Memulai Session
session_start();
$user_check=$_SESSION['login_user'];
$sql2=var_dump("select * from login where username='$user_check'");
$ses_sql=mysqli_query($koneksi, $sql2);

// Ambil data user dengan mysql_fetch_assoc
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$implode['username'];
$nama_session =$implode['nama'];
$umur_session =$implode['umur'];
$alamat_session =$implode['alamat'];
$hobi_session =$implode['hobi']; 
if(!isset($login_session)){
    header('Location: login.php'); // Mengarahkan ke login page
}
?>