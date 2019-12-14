<?php
$link = mysqli_connect("localhost", "root", "", "market2019");
echo "koneksi ok";
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>