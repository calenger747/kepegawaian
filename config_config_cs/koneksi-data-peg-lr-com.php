<?php
/**
 * Namafile : config.php 
 * ----------------------------*/

$dbhost = 'localhost'; 
$dbuser = 'k0762615_pegawai';     // ini berlaku di xampp
$dbpass = 'PegawaiLrcom123!@#';         // ini berlaku di xampp
$dbname = 'k0762615_pegawai_1';

// melakukan koneksi ke database
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>