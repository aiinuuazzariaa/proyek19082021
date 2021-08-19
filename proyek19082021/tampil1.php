<?php
//menangkap data dengan post
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$hobi = $_POST['hobi'];
$cita = $_POST['cita'];
$usia = $_POST['usia'];
$asal = $_POST['asal'];
// menampilkan data
echo "Nama : " . $nama;
echo "<br/>";
echo "Jenis : " . $jenis;
echo "<br/>";
echo "Agama : " . $agama;
echo "<br/>";
echo "Alamat : " . $alamat;
echo "<br/>";
echo "Tempat Lahir : " . $tempat;
echo "<br/>";
echo "Tanggal Lahir : " . $tanggal;
echo "<br/>";
echo "Hobi : " . $hobi;
echo "<br/>";
echo "Cita - cita : " . $cita;
echo "<br/>";
echo "Usia : " . $usia;
echo "<br/>";
echo "Asal Sekolah : " . $asal;
?>