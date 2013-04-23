<?php
$con=mysql_connect("localhost","root","") or die ('error = '.mysql_error());
mysql_select_db('ppdb') or die ('error = '.mysql_error());
if(isset($_GET['id']))
{
$id=$_GET['id'];

  $kelas=$_POST['kelas'];

  //kelamin_siswa='$kelamin_siswa',agama_siswa='$agama_siswa',
$save="UPDATE siswa SET kelas='$kelas' WHERE nomor_pendaftaran='$id'"; //untuk insert query
	
	$query = @mysql_query($save) or die ("error = ".mysql_error());
if($query){
header('Location: kelas.php');
}}
?> 