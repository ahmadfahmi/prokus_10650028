<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" js canvas canvastext geolocation crosswindowmessaging no-websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms no-csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>E-Learning SMP</title>
<meta name="description" content="website description">
<meta name="keywords" content="website keywords, website keywords">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="E-Learning%20SMP_files/style.css">
<!-- modernizr enables HTML5 elements and feature detects --><script type="text/javascript" src="E-Learning%20SMP_files/modernizr-1.js"></script>
    <link rel="stylesheet" type="text/css" href="E-Learning%20SMP_files/demo.htm" media="screen">
    <link rel="stylesheet" type="text/css" href="E-Learning%20SMP_files/slide.css" media="screen">
    <script type="text/javascript" src="E-Learning%20SMP_files/jquery_002.js"></script>
    
    <!-- PNG FIX for IE6 -->
    <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
    <!--[if lte IE 6]>
        <script type="text/javascript" src="login_panel/js/pngfix/supersleight-min.js"></script>
    <![endif]-->
    
    <script src="E-Learning%20SMP_files/slide.js" type="text/javascript"></script>

    </head>

<body>

<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<s size="6" color="red">belajarndang.com</s>
				<p size="5">Elearning</p>		
				<p class="grey">Dimana belajar menjadi sangat menyenangkan</p>
				<p class="grey">Panduan lengkap yang belum lengkap bagi pelajar SMP</p>
				<p class="grey">Semoga dapat membantu Anda</p>
				<p class="grey">Selamat Menikmati</p>
			</div>
            
            <div class="left">
                <h1><a href="https://www.facebook.com/ahmad.fahmi.bin.djundardo">Ahmad Fahmi</a></h1>
				<p>NIM: 10650028</p>
				<h1><a href="https://www.facebook.com/alfi.bobo">Alfi Aqil</a></h1>
				<p>NIM: 10650038</p>                       
            	<h1><a href="https://www.facebook.com/dwihary.febriansyah">Dwi Hari Febriansyah</a></h1>
				<p>NIM: 10650020</p>
				<h1><a href="https://www.facebook.com/cremiinalizm">Ihsan Sinatrya Ramadhan</a></h1>
				<p>NIM: 10650032</p>
			</div>
			
			<div class="right">
			<p><img style="margin: 0px 0 10px 20px; float: right;padding: 10px; border: 1px solid #ddd;" src="file:///C|/xampp/htdocs/2/unya/admin/E-Learning SMP_files/photo.png"></p>		
			</div>
            
		</div>
	</div> <!-- /login -->	

    <!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
	    	<li class="left">&nbsp;</li>
	        <li>Hello :D</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Buka Panel</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
	    	<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

  <div id="container">
    
    <img src="file:///C|/xampp/htdocs/2/unya/admin/E-Learning2_files/sun.png" alt="sunshine"><div id="main">
      <header><div id="logo">
          <div id="logo_text">
            <h1><a href="file:///C|/xampp/htdocs/2/unya/admin/index.php">SMP N 1 BERBAH</a></h1>
            <h2>PENERIMAAN PERSERTA DIDIK BARU</h2>
        </div>
    <div id="logo_text2">
            <h3></h3>
            <h4></h4>
          </div>
        </div>
        <nav><ul class="sf-menu" id="nav">
<li><a href="index.php">Lihat Semua Data</a></li>
            <li><a href="admin_add.php">Masukan Siswa Baru</a></li>
            <li><a href="kelas.php">Edit Kelas</a></li>
           <li><a href="statistik.php">Statistik</a></li>
               

            
          </ul>
        </nav></header><div id="site_content">
        <div id="sidebar_container">
          <div class="sidebar">
            <h4>JUMLAH PENDAFTAR</h4>
            <p size="5"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?> </p>
            <p size="5">&nbsp;</p>
          </div>
          <div class="sidebar">
            <h4>NEM TERBAIK</h4>
			<?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT MAX(jumlah) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['MAX(jumlah)'];
	mysql_close($con);}
?> </p>

            <p>&nbsp;</p>
          </div>
          <div class="sidebar">
            <h4>BATAS NEM TERENDAH<a href="#"></a><!--</p-->
          </h4><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT MAX(jumlah) FROM siswa where rank>=96"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['MAX(jumlah)'];
	mysql_close($con);}
?>
            <p>&nbsp;</p>
          </div>
        </div>
        <div id="content">
          <p>A. Jumlah Pendaftar</p>
          
          <table width="190" border="1">
            <tr>
              <th width="7" scope="row">1</th>
              <td width="112">Laki-laki</td>
              <td width="10">:</td>
              <td width="33"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='laki'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Perempuan</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='perempuan'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
          </table>
          <h1>&nbsp;</h1>
          <p>B.Agama</p>
          <table width="601" border="1">
            <tr>
              <th width="7" rowspan="2" scope="row">1</th>
              <td width="110" rowspan="2">Islam</td>
              <td width="312">Laki-laki</td>
              <td width="8">:</td>
              <td width="59"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='laki' AND agama_siswa='islam'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
              <td width="68" rowspan="2"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where agama_siswa='islam'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td>perempuan</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='perempuan' AND agama_siswa='islam'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <th rowspan="2" scope="row">2</th>
              <td rowspan="2">Kristen</td>
              <td>Laki-laki</td>
              <td width="8">:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='laki' AND agama_siswa='kristen'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
              <td rowspan="2"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where agama_siswa='kristen'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td>perempuan</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='perempuan' AND agama_siswa='kristen'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <th rowspan="2" scope="row">3</th>
              <td rowspan="2">Katholik</td>
              <td>Laki-laki</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='laki' AND agama_siswa='katholik'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
              <td rowspan="2"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where agama_siswa='katholik'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td>perempuan</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='perempuan' AND agama_siswa='katholik'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <th rowspan="2" scope="row">4</th>
              <td rowspan="2">Hindu</td>
              <td>Laki-laki</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='laki' AND agama_siswa='hindu'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
              <td rowspan="2"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where agama_siswa='hindu'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td>perempuan</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='perempuan' AND agama_siswa='hindu'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <th rowspan="2" scope="row">5</th>
              <td rowspan="2">Budha</td>
              <td>Laki-laki</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='laki' AND agama_siswa='budha'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
              <td rowspan="2"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where agama_siswa='budha'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td>perempuan</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where kelamin_siswa='perempuan' AND agama_siswa='budha'";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>C. Rincian NEM</p>
          <p>&nbsp;</p>
          <table width="614" border="1">
            <tr>
              <th width="35" rowspan="3" scope="row">1</th>
              <td rowspan="3">Nilai Tertinggi</td>
              <td>Bahasa Indonesia</td>
              <td width="9">:</td>
              <td width="65"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT MAX(bahasa_indonesia) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['MAX(bahasa_indonesia)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>Matematika</td>
              <td width="9">:</td>
              <td width="65"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT MAX(matematika) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['MAX(matematika)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>IPA</td>
              <td width="9">:</td>
              <td width="65"><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT MAX(ipa) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['MAX(ipa)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <th rowspan="3" scope="row">2</th>
              <td rowspan="3">Nilai Terendah</td>
              <td>Bahasa Indonesia</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT min(bahasa_indonesia) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['min(bahasa_indonesia)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>Matematika</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT min(matematika) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['min(matematika)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>IPA</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT min(ipa) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['min(ipa)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <th rowspan="4" valign="top" scope="row">3</th>
              <td rowspan="4">Rata-rata Nilai</td>
              <td>Bahasa Indonesia</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT avg(bahasa_indonesia) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['avg(bahasa_indonesia)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>Matematika</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT avg(matematika) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['avg(matematika)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>IPA</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT avg(ipa) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['avg(ipa)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <td>Total</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("ppdb",$con);
$query = "SELECT avg(jumlah) FROM siswa"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['avg(jumlah)'];
	mysql_close($con);}
?> </td>
            </tr>
            <tr>
              <th rowspan="20" align="center" valign="top" scope="row">4</th>
              <td width="86" rowspan="20" valign="top">NEM </td>
              <td width="385">           Lebih dari 27,00</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>27";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 26.50 - 26.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=26.5 AND jumlah<27";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 26,00 - 24,99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=26 AND jumlah<26.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 25.50 - 25.99</td>
              <td width="9">:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=25.5 AND jumlah<26";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 25,00 - 25,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=25 AND jumlah<25.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 24.50 - 24.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=24.5 AND jumlah<25";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 24,00 - 24,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=24 AND jumlah<24.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 23.50 - 23.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=23.5 AND jumlah<24";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 23,00 - 23,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=23 AND jumlah<23.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 22.50 - 22.99</td>
              <td width="9">:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=22.5 AND jumlah<23";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 22,00 - 22,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=22 AND jumlah<22.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 21.50 - 21.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=21.5 AND jumlah<22";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 21,00 - 21,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=21 AND jumlah<21.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 20.50 - 20.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=20.5 AND jumlah<21";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 20,00 - 20,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=20 AND jumlah<20.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 19.50 - 19.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=19.5 AND jumlah<20";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 19,00 - 19,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=19 AND jumlah<19.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 18.50 - 18.99</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=18.5 AND jumlah<19";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> 18,00 - 18,49</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah>=18 AND jumlah<18.5";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
            <tr>
              <td> Kurang dari 18,00</td>
              <td>:</td>
              <td><?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("ppdb",$con);

$sql = "SELECT * FROM siswa where jumlah<18";
$result = mysql_query($sql,$con);
echo mysql_num_rows($result);

mysql_close($con);
?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>D. Daerah Asal Pendaftar</p>
          <p>&nbsp;</p>
          <table width="603" border="1">
            <tr>
              <th width="29" scope="row">1</th>
              <td width="484">BERBAH</td>
              <td>:</td>
              <td width="53">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>PRAMBANAN</td>
              <td width="9">:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>DEPOK</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>NGEMPLAK</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>MLATI</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>KALASAN</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>NGAGLIK</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>MINGGIR</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Luar Sleman dalam Propinsi</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Luar Propinsi</td>
              <td>:</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <td>&nbsp;</td>
							<td>&nbsp;</td>
        </div>
      </div>
      <footer><p>&nbsp;</p>
      <p>Copyright © SMP N 1 BERBAH</p>
      </footer>
</div>
  </div>
<div id="grass"></div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="file:///C|/xampp/htdocs/2/unya/admin/E-Learning SMP_files/jquery_003.js"></script><script type="text/javascript" src="file:///C|/xampp/htdocs/2/unya/admin/E-Learning SMP_files/jquery.js"></script><script type="text/javascript" src="file:///C|/xampp/htdocs/2/unya/admin/E-Learning SMP_files/jquery_004.js"></script><script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>


</body></html>