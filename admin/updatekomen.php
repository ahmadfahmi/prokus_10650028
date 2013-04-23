<?php
$con=mysql_connect("localhost","root","") or die ('error = '.mysql_error());
mysql_select_db('ppdb') or die ('error = '.mysql_error());
if(isset($_GET['id']))
{
$id=$_GET['id'];

  $nama=$_POST['nama'];
  $komen=$_POST['komen'];
$save="UPDATE komen SET nama='$nama',komen='$komen',tanggal='$tanggal',bulan='$bulan',tahun='$tahun',alamat_siswa='$alamat_siswa',asal_siswa='$asal_siswa',kecamatan_siswa='$kecamatan_siswa',kabupaten_siswa='$kabupaten_siswa',nama_ortu='$nama_ortu', alamat_ortu='$alamat_ortu',pekerjaan_ortu='$pekerjaan_ortu',nama_wali='$nama_wali',alamat_wali='$alamat_wali',pekerjaan_wali='$pekerjaan_wali',nama_sekolah='$nama_sekolah',status_sekolah='$status_sekolah',alamat_sekolah='$alamat_sekolah',nomor_ijazah='$nomor_ijazah',tahun_ijazah='$tahun_ijazah',bahasa_indonesia='$bahasa_indonesia',matematika='$matematika',ipa='$ipa',prestasi='$prestasi' WHERE nomor_pendaftaran='$id'"; //untuk insert query
	
	$query = @mysql_query($save) or die ("error = ".mysql_error());
if($query){
header('Location: index.php');
}}
?> 