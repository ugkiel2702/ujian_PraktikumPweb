<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ujian_pweb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Koneksi gagal". mysqli_connect_error());
}

//echo "Koneksi berhasil";