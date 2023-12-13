<?php
include('koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($conn,"SELECT * FROM users where email='$email' and password='$password'");

$cek = mysqli_num_rows($result);
 

if (empty($_POST['email']) || empty($_POST['password'])) {
  echo "<script>alert(' Isi data dengan benar');history.back();</script>";
  return;
}

if($cek > 0) {
  $data = mysqli_fetch_assoc($result);
  //menyimpan session user, nama, status dan id login
  $_SESSION['email'] = $email;
  echo "<script>alert('Login Berhasil.');location='admin.php';</script>";
} else {
  echo "<script>alert('Maaf Data yang anda masukkan salah.');window.location='login.php';</script>";
}
?>