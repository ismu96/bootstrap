<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
//$password = $_POST['password'];

$data = mysqli_query($link,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.html");
}else{
	header("location:index.php?pesan=gagal");
}
?>
