<?php
// Create connection
$con=mysqli_connect("localhost","root","","ppdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$jumlah = $_POST['bahasa_indonesia']+$_POST['matematika']+$_POST['ipa']+$_POST['prestasi'];
$sql="INSERT INTO `siswa`(`nama_siswa`, `tempat_siswa`, `tanggal`, `bulan`, `tahun`, `alamat_siswa`, `asal_siswa`, `kecamatan_siswa`, `kabupaten_siswa`, `kelamin_siswa`, `agama_siswa`, `nama_ortu`, `alamat_ortu`, `pekerjaan_ortu`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `nomor_ijazah`, `tahun_ijazah`, `bahasa_indonesia`, `matematika`, `ipa`, `prestasi`,`jumlah`)
VALUES
('$_POST[nama_siswa]','$_POST[tempat_siswa]','$_POST[tanggal]','$_POST[bulan]','$_POST[tahun]','$_POST[alamat_siswa]','$_POST[asal_siswa]','$_POST[kecamatan_siswa]','$_POST[kabupaten_siswa]','$_POST[kelamin_siswa]','$_POST[agama_siswa]','$_POST[nama_ortu]','$_POST[alamat_ortu]','$_POST[pekerjaan_ortu]','$_POST[nama_wali]','$_POST[alamat_wali]','$_POST[pekerjaan_wali]','$_POST[nama_sekolah]','$_POST[status_sekolah]','$_POST[alamat_sekolah]','$_POST[nomor_ijazah]','$_POST[tahun_ijazah]','$_POST[bahasa_indonesia]','$_POST[matematika]','$_POST[ipa]','$_POST[prestasi]','$jumlah')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "<script>window.location = 'index.php'</script>";

mysqli_close($con);
?> 