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
    <img src="E-Learning%20SMP_files/sun.png" alt="sunshine"><div id="main">
      <header><div id="logo">
          <div id="logo_text">
            <h1><a href="E-Learning SMP.htm">belajarndang<span class="logo_colour">.com</span></a></h1>
            <h2>KETIKA BELAJAR JADI MENYENANGKAN</h2>
          </div>
          <div id="logo_text2">
            <h3></h3>
            <h4></h4>
          </div>
        </div>
        <nav><ul class="sf-menu" id="nav">
<li><a href="daftar.php">Daftar Baru</a></li>
          <li><a href="cari.php">Lihat Hasil</a></li>
          <li class="sf-parent">
<a href="#">Kelas<span class="sf-arrow"></span></a>
              <ul style="left: auto; display: none;">
<li><a href="kelasa.php">Kelas VII A</a></li>
<li><a href="kelasb.php">Kelas VII B</a></li>
<li><a href="kelasc.php">Kelas VII C</a></li>
              </ul>
			  </li><li><a href="buku.php">Buku Tamu</a></li>

            
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
$query = "SELECT * FROM siswa where rank=96"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['MAX(jumlah)'];
	mysql_close($con);}
?>
            <p>&nbsp;</p>
          </div>
        </div>
        <div id="content">
          <h1>DAFTAR CALON PESERTA DIDIK BARU YANG DITERIMA DI SMP NEGERI 1 BERBAH</h1>
          <p class="style1">TAHUN PELAJARAN 2011/2012</p>
          <p class="style2">&nbsp;</p>
          <p></p>

          <table width="547" border="1">
            <tr>
              <th width="92" scope="row">Nama</th>
              <td width="439"><form id="form1" name="form1" method="post" action="">
                <input type="text" name="nama_siswa" id="nama_siswa" value=""/>
                
             </td>
            </tr>
            <tr>
              <th scope="row">Tanggal Lahir</th>
              <td><select name="tanggal">
                      <option value="1">1</option>
                      <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					  <option value="13">13</option>
					  <option value="14">14</option>
					  <option value="15">15</option>
					  <option value="16">16</option>
					  <option value="17">17</option>
					  <option value="18">18</option>
					  <option value="19">19</option>
					  <option value="20">20</option>
					  <option value="21">21</option>
					  <option value="22">22</option>
					  <option value="23">23</option>
					  <option value="24">24</option>
					  <option value="25">25</option>
					  <option value="26">26</option>
					  <option value="27">27</option>
					  <option value="28">28</option>
					  <option value="29">29</option>
					  <option value="30">30</option>
					  <option value="31">31</option>
                    </select>
                    <select name="bulan">
                      <option value="Januari">Januari</option>
                      <option value="Pebruari">Pebruari</option>
                      <option value="Maret">Maret</option>
                      <option value="April">April</option>
                      <option value="Mei">Mei</option>
                      <option value="Juni">Juni</option>
                      <option value="Juli">Juli</option>
                      <option value="Agustus">Agustus</option>
                      <option value="September">September</option>
                      <option value="Oktober">Oktober</option>
                      <option value="November">November</option>
                      <option value="Desember">Desember</option>
                    </select>
                    <select name="tahun">
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                                        </select>
              </td>
            </tr>
          </table>
          
          <input class="button" name="kirim" type="submit" value="Kirim"/>
          </form>
         <?php 
	  if($_POST["kirim"]=="Kirim"){  
	  $name=$_POST['nama_siswa']; 
	  $con=mysqli_connect("localhost","root","","ppdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
															
															echo "<table border='1'>
															<tr>
															<th>Ranking</th>
															<th>Nomor pendaftaran</th>
															<th>Nama Siswa</th>
															<th>Jumlah Nilai</th>
															<th>update</th>
															<th>delete</th>
															</tr>";
															$sql2 = "UPDATE siswa\n"
																	. "JOIN (SELECT p.nomor_pendaftaran,\n"
																	. " @curRank := @curRank + 1 AS rank_kelamin\n"
																	. " FROM siswa p\n"
																	. " JOIN (SELECT @curRank := 0) r\n"
																	. " ORDER BY  p.kelamin_siswa, p.jumlah DESC\n"
																	. " ) ranks ON (ranks.nomor_pendaftaran = siswa.nomor_pendaftaran)\n"
																	. "SET siswa.rank_kelamin = ranks.rank_kelamin;";
															    												
															$query2 = @mysql_query($sql2) or die ("error = ".mysql_error());
																				
															
if($query2){
}
															$sql = "UPDATE siswa\n"
																	. "JOIN (SELECT p.nomor_pendaftaran,\n"
																	. " @curRank := @curRank + 1 AS rank\n"
																	. " FROM siswa p\n"
																	. " JOIN (SELECT @curRank := 0) r\n"
																	. " ORDER BY p.jumlah DESC\n"
																	. " ) ranks ON (ranks.nomor_pendaftaran = siswa.nomor_pendaftaran)\n"
																	. "SET siswa.rank = ranks.rank;";
															    												
															$query = @mysql_query($sql) or die ("error = ".mysql_error());
																				
															
if($query){
}
				
															$result = mysqli_query($con,"SELECT * FROM siswa WHERE  nama_siswa LIKE '%" . $name . "%' ");
 															$unya = mysqli_query($con,"SELECT rank_kelamin FROM `siswa` ORDER BY rank_kelamin ASC ");
															while($row = mysqli_fetch_array($result))
															  {
																  $i=1;
																  while($i<=mysqli_fetch_array($unya)){
																  mysql_query("UPDATE siswa SET kelas='A' WHERE rank_kelamin=".$i."");$i=$i+1;
																  mysql_query("UPDATE siswa SET kelas='B' WHERE rank_kelamin=".$i."");$i=$i+1;
																  mysql_query("UPDATE siswa SET kelas='C' WHERE rank_kelamin=".$i."");$i=$i+1;
																  };
															  echo "<tr>";
															  echo "<td>" . $row['rank'] . "</td>";
															  echo "<td>" . $row['nomor_pendaftaran'] . "</td>";
															  echo "<td>" . $row['nama_siswa'] . "</td>";
															  echo "<td>" . $row['jumlah'] . "</td>";
															  
	  } 
	  
	  }
	?> 
          <p> </p>
        </div>
      </div>
      <footer><p><a href="http://belajarndang.com/home.php">Halaman Utama</a> | <a href="http://belajarndang.com/log.php?op=out">Logout</a>
        </p><p>Copyright © E-Learning SMP  
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