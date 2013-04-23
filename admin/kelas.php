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
    
    <style type="text/css">
<!--
.style1 {
	color: #E5017D;
	font-size: 24px;
}
.style2 {font-size: 24px}
-->
    </style>
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
			<p><img style="margin: 0px 0 10px 20px; float: right;padding: 10px; border: 1px solid #ddd;" src="E-Learning%20SMP_files/photo.png"></p>		
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
    <img src="E-Learning2_files/sun.png" alt="sunshine"><div id="main">
      <header><div id="logo">
          <div id="logo_text">
            <h1><a href="index.php">SMP N 1 BERBAH</a></h1>
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
            
          </ul></nav></header><div id="site_content">
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
$query = "SELECT jumlah FROM siswa where rank='50'"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['jumlah'];
	mysql_close($con);}
?>
            <p>&nbsp;</p>
          </div>
        </div>
        <div id="content">
          <h1>DAFTAR KELAS DI SMP NEGERI 1 BERBAH</h1>
          
																	<?php 
															// Create connection
$con=mysqli_connect("localhost","root","","ppdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>

<p><br>kelas A</p>
<?php


															$result = mysqli_query($con,"SELECT * FROM siswa WHERE kelas='A'  AND rank<='96' ORDER BY nama_siswa ASC");

//echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM siswa WHERE kelas='A' AND kelamin_siswa='laki'"));
//echo " dan ";
//echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM siswa WHERE kelas='A' AND kelamin_siswa='perempuan'"));
															echo "<table border='1'>
															<tr>
															<th>absen</th>
															<th>nomor<br>pendaftaran</th>
															<th>nama siswa</th>
															<th>kelamin</th>
															<th>agama</th>
															<th></th>
															</tr>";
$absena=1;
															while($row = mysqli_fetch_array($result))
															  {
															  echo "<tr>";
															  echo "<td>" . $absena . "</td>";
															  echo "<td>" . $row['nomor_pendaftaran'] . "</td>";
															  echo "<td>" . $row['nama_siswa'] . "</td>";
															  echo "<td>" . $row['kelamin_siswa'] . "</td>";
															  echo "<td>" . $row['agama_siswa'] . "</td>";?>
                                                              <td>
						<form action="pindah.php?id=<?php echo $row['nomor_pendaftaran']; ?>" name="klas" method="POST">
                       <select name="kelas">
                       <option value="<?php echo $row['kelas']; ?>"><?php echo $row['kelas']; ?></option>
                      <option value="B">B</option>
                      <option value="C">C</option></select>
                      <input type="submit" name="submit" value="pindah"/></form></td>
															<?php  
															
																															
															echo "</tr>";
															  $absena++;}
															echo "</table>";

															?> 
                                                            
<p><br>kelas B</p>
<?php
															$result = mysqli_query($con,"SELECT * FROM siswa WHERE kelas='B'  AND rank<='96' ORDER BY nama_siswa ASC");
//echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM siswa WHERE kelas='B' AND kelamin_siswa='laki'"));
//echo " dan ";
//echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM siswa WHERE kelas='B' AND kelamin_siswa='perempuan'"));
															echo "<table border='1'>
															<tr>
															<th>absen</th>
															<th>nomor<br>pendaftaran</th>
															<th>nama siswa</th>
															<th>kelamin</th>
															<th>agama</th>
															<th></th>
															</tr>";
$absenb=1;
															while($row = mysqli_fetch_array($result))
															  {
															  echo "<tr>";
															  echo "<td>" . $absenb . "</td>";
															  echo "<td>" . $row['nomor_pendaftaran'] . "</td>";
															  echo "<td>" . $row['nama_siswa'] . "</td>";
															  echo "<td>" . $row['kelamin_siswa'] . "</td>";
															  echo "<td>" . $row['agama_siswa'] . "</td>";?>
                                                              <td>
						<form action="pindah.php?id=<?php echo $row['nomor_pendaftaran']; ?>" name="klas" method="POST">
                       <select name="kelas">
                       <option value="<?php echo $row['kelas']; ?>"><?php echo $row['kelas']; ?></option>
                      <option value="A">A</option>
                      <option value="C">C</option></select>
                      <input type="submit" name="submit" value="pindah"/></form></td>
															<?php
															  echo "</tr>";
															  $absenb++;}
															echo "</table>";

															?> 
                                                            <p><br>kelas C</p>
<?php
															$result = mysqli_query($con,"SELECT * FROM siswa WHERE kelas='C' AND rank<='96' ORDER BY nama_siswa ASC");
//echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM siswa WHERE kelas='C' AND kelamin_siswa='laki'"));
//echo " dan ";
//echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM siswa WHERE kelas='C' AND kelamin_siswa='perempuan'"));
															echo "<table border='1'>
															<tr>
															<th>absen</th>
															<th>nomor<br>pendaftaran</th>
															<th>nama siswa</th>
															<th>kelamin</th>
															<th>agama</th>
															<th></th>
															</tr>";
$absenc=1;
															while($row = mysqli_fetch_array($result))
															  {
															  echo "<tr>";
															  echo "<td>" . $absenc . "</td>";
															  echo "<td>" . $row['nomor_pendaftaran'] . "</td>";
															  echo "<td>" . $row['nama_siswa'] . "</td>";
															  echo "<td>" . $row['kelamin_siswa'] . "</td>";
															  echo "<td>" . $row['agama_siswa'] . "</td>";?>
                                                              <td>
						<form action="pindah.php?id=<?php echo $row['nomor_pendaftaran']; ?>" name="klas" method="POST">
                       <select name="kelas">
                       <option value="<?php echo $row['kelas']; ?>"><?php echo $row['kelas']; ?></option>
                      <option value="A">A</option>
                      <option value="B">B</option></select>
                      <input type="submit" name="submit" value="pindah"/></form></td>
															<?php
															  echo "</tr>";
															  $absenc++;}
															echo "</table>";
																	
															?> 
          <p>&nbsp;</p>
        </div>
      </div>
      <footer>
        <p><a href="http://belajarndang.com/home.php"> </a><a href="http://belajarndang.com/log.php?op=out"></a>
        </p><p>Copyright © SMP N 1 BERBAH  
</p>
      </footer>
</div>
  </div>
  <div id="grass"></div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="E-Learning%20SMP_files/jquery_003.js"></script><script type="text/javascript" src="E-Learning%20SMP_files/jquery.js"></script><script type="text/javascript" src="E-Learning%20SMP_files/jquery_004.js"></script><script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>


</body></html>