<?php
$con=mysql_connect("localhost","root","") or die ('error = '.mysql_error());
mysql_select_db('ppdb') or die ('error = '.mysql_error());
if(isset($_GET['id']))
{
$id=$_GET['id'];

  $nama_siswa=$_POST['nama_siswa'];
  $tempat_siswa=$_POST['tempat_siswa'];
  $tanggal=$_POST['tanggal'];
  $bulan=$_POST['bulan'];
  $tahun=$_POST['tahun'];
  $alamat_siswa=$_POST['alamat_siswa'];
  $asal_siswa=$_POST['asal_siswa'];
  $kecamatan_siswa=$_POST['kecamatan_siswa'];
  $kabupaten_siswa=$_POST['kabupaten_siswa'];
  $kelamin_siswa=$_POST['kelamin_siswa'];
  $agama_siswa=$_POST['agama_siswa'];
  $nama_ortu=$_POST['nama_ortu'];
  $alamat_ortu=$_POST['alamat_ortu'];
  $pekerjaan_ortu=$_POST['pekerjaan_ortu'];
  $nama_wali=$_POST['nama_wali'];
  $alamat_wali=$_POST['alamat_wali'];
  $pekerjaan_wali=$_POST['pekerjaan_wali'];
  $nama_sekolah=$_POST['nama_sekolah'];
  $status_sekolah=$_POST['status_sekolah'];
  $alamat_sekolah=$_POST['alamat_sekolah'];
  $nomor_ijazah=$_POST['nomor_ijazah'];
  $tahun_ijazah=$_POST['tahun_ijazah'];
  $bahasa_indonesia=$_POST['bahasa_indonesia'];
  $matematika=$_POST['matematika'];
  $ipa=$_POST['ipa'];
  $prestasi=$_POST['prestasi'];
  $jumlah = $_POST['bahasa_indonesia']+$_POST['matematika']+$_POST['ipa']+$_POST['prestasi'];
  //$id=$_POST['nomor_pendaftaran'];

  //
$save="UPDATE siswa SET nama_siswa='$nama_siswa',tempat_siswa='$tempat_siswa',tanggal='$tanggal',bulan='$bulan',tahun='$tahun',alamat_siswa='$alamat_siswa',asal_siswa='$asal_siswa',kecamatan_siswa='$kecamatan_siswa',kabupaten_siswa='$kabupaten_siswa',nama_ortu='$nama_ortu',alamat_ortu='$alamat_ortu',pekerjaan_ortu='$pekerjaan_ortu',nama_wali='$nama_wali',alamat_wali='$alamat_wali',pekerjaan_wali='$pekerjaan_wali',kelamin_siswa='$kelamin_siswa',agama_siswa='$agama_siswa',nama_sekolah='$nama_sekolah',status_sekolah='$status_sekolah',alamat_sekolah='$alamat_sekolah',nomor_ijazah='$nomor_ijazah',tahun_ijazah='$tahun_ijazah',bahasa_indonesia='$bahasa_indonesia',matematika='$matematika',ipa='$ipa',prestasi='$prestasi',jumlah='$jumlah' WHERE nomor_pendaftaran='$id'"; //untuk insert query
	
	$query = @mysql_query($save) or die ("error = ".mysql_error());
if($query){
header('Location: index.php');
}}
?> 