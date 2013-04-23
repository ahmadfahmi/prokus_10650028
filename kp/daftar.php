<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html class=" js canvas canvastext geolocation crosswindowmessaging no-websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms no-csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>E-Learning SMP</title>
<meta name="description" content="website description">
<meta name="keywords" content="website keywords, website keywords">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="E-Learning2_files/style.css">
<!-- modernizr enables HTML5 elements and feature detects --><script type="text/javascript" src="E-Learning2_files/modernizr-1.js"></script>
    <link rel="stylesheet" type="text/css" href="E-Learning2_files/demo.htm" media="screen">
    <link rel="stylesheet" type="text/css" href="E-Learning2_files/slide.css" media="screen">
    <script type="text/javascript" src="E-Learning2_files/jquery_002.js"></script>
    
    <!-- PNG FIX for IE6 -->
    <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
    <!--[if lte IE 6]>
        <script type="text/javascript" src="login_panel/js/pngfix/supersleight-min.js"></script>
    <![endif]-->
    
    <script src="E-Learning2_files/slide.js" type="text/javascript"></script>
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
			<p><img style="margin: 0px 0 10px 20px; float: right;padding: 10px; border: 1px solid #ddd;" src="E-Learning2_files/photo.png"></p>		
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
$query = "SELECT * FROM siswa where rank='50'"; 
$result = mysql_query($query,$con);
while($row = mysql_fetch_array($result)){
	echo $row['jumlah'];
	mysql_close($con);}
?>
            <p>&nbsp;</p>
          </div>
        </div>
        <div id="content">
          <h1>Formulir Pendaftaran</h1>
          <p>Silahkan mengisi formulir di bawah ini dengan lengkap dan benar.</p>
          <p>&nbsp;</p>
          <p><strong>     Nomor Pendaftaran :</strong></p>
          <ol>
            <li><strong>A. IDENTITAS PESERTA  SELEKSI </strong></li>
          </ol>
          <ol start="1" type="1">
            <li>
              <table width="617" border="0"><form id="form4" name="form4" method="post" action="input.php">
                <tr>
                  <td width="14">1</td>
                  <td width="163">Nama lengkap     </td>
                  <td width="8">:</td>
                  <td colspan="2"><input type="text" name="nama_siswa" size="60" /></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Tempat lahir</td>
                  <td>:</td>
                  <td colspan="2">
                    <label>
                    <input type="text" name="tempat_siswa" size="60" />
                    </label>
                    <label></label>
                                    </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Tanggal lahir</td>
                  <td>:</td>
                  <td colspan="2"><label>
                    <select name="tanggal">
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
                  </label></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Alamat di Yogyakarta</td>
                  <td>:</td>
                  <td colspan="2">
                    <label>
                      <textarea name="alamat_siswa" cols="50" rows="5"></textarea>
                    </label>
                                   </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Alamat asal </td>
                  <td>:</td>
                  <td colspan="2">
                    <label>
                    <textarea name="asal_siswa" cols="50" rows="5"></textarea>
                    </label>
                                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Kecamatan</td>
                  <td>:</td>
                  <td colspan="2">
                    <label>
                      <input type="text" name="kecamatan_siswa" size="60" />
                    </label>
                                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Kabupaten</td>
                  <td>:</td>
                  <td colspan="2">
                    <label>
                      <input type="text" name="kabupaten_siswa" size="60" />
                    </label>
                                   </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Jenis kelamin    </td>
                  <td>:</td>
                  <td colspan="2">
                      <p>&nbsp;</p>
                      <p>
                        <label>
                        <input type="radio" name="kelamin_siswa" value="perempuan" />
                          Perempuan</label>
                        <label>
                        <input type="radio" name="kelamin_siswa" value="laki" />
                          Laki-laki</label>
                        <br />
                                            </p>
                    <label></label>
                  </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Agama </td>
                  <td>:</td>
                  <td width="152">
                      <label></label>
                      <p>
                        <label>
                        <input name="agama_siswa" type="radio" class="left" value="islam" />
                          Islam</label>
                        <label>
                        <input name="agama_siswa" type="radio" class="left" value="kristen" />
                          Kristen</label>
                        <label>
                        <input name="agama-siswa" type="radio" class="left" value="katholik" />
                          Katholik</label>
                        <label></label>
                        <label></label>
                      </p>
                 </td>
                  <td width="152">
                    <p><label></label>
                      <label></label>
                      <label></label>
                      <label>
                      <input name="agama_siswa" type="radio" class="left" value="hindu" />
                        Hindu </label>
                      <label>
                      <input name="agama_siswa" type="radio" class="left" value="budha" />
                        Budha</label>
                    </p>
                  </td>
                </tr>
              </table>
                            </li>
          </ol>
          <ol start="1" type="1"><li></li>
            <li></li>
            <li><strong>B. IDENTITAS  ORANGTUA/WALI</strong></li>
            <li>
              <table width="617" border="0">
                <tr>
                  <td width="6">1</td>
                  <td width="187">Nama orangtua       </td>
                  <td width="10">:</td>
                  <td width="401"><input type="text" name="nama_ortu" size="60" /></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Alamat     </td>
                  <td>:</td>
                  <td>
                    <label>
                    <textarea name="alamat_ortu" cols="50" rows="5"></textarea>
                    </label>
                                </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Pekerjaan    </td>
                  <td>:</td>
                  <td><input name="pekerjaan_ortu" type="text" size="60" /></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Nama wali *)   </td>
                  <td>:</td>
                  <td><input name="nama_wali" type="text" size="60" /></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Alamat    </td>
                  <td>:</td>
                  <td>
                    <label>
                    <textarea name="alamat_wali" cols="50" rows="5"></textarea>
                    </label>
                                </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Pekerjaan</td>
                  <td>:</td>
                  <td>
                    <input name="pekerjaan_wali" type="text" size="60" />
                                 </td>
                </tr>
              </table>
            </li>
            <li>                        </li>
          </ol>
          <ol>
            <li><strong>C. ASAL  SEKOLAH</strong></li>
            <li>
              <table width="617" border="0">
                <tr>
                  <td width="6">1</td>
                  <td width="186">Nama Sekolah     </td>
                  <td width="10">:</td>
                  <td width="403"><input type="text" name="nama_sekolah" size="60" /></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Status         </td>
                  <td>:</td>
                  <td><input type="text" name="status_sekolah" size="60" /></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Alamat Sekolah     </td>
                  <td>:</td>
                  <td>
                    <label>
                      <textarea name="alamat_sekolah" cols="50" rows="5"></textarea>
                    </label>
                                   </td>
                </tr>
              </table>
            </li>
          </ol>
          <p>         <br />
            <strong>D.   Prestasi di bidang Olahraga/Seni/Kreativitas dan Minat Mata Pelajaran : <br />
          ………………....dengan tambahan nilai…………..(bukti sertifikat terlampir).     </strong></p>
          <p>&nbsp;</p>
          <p><strong>E. Isi ijasah</strong></p>
          <table width="617" border="0">
            <tr>
              <td width="6">1</td>
              <td width="183">Nomor ijasah</td>
              <td width="10">:</td>
              <td width="400">
                <label>
                  <input type="text" name="nomor_ijazah" size="60" />
                </label>
                           </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Tahun ijasah</td>
              <td>:</td>
              <td>
                <label>
                  <input type="text" name="tahun_ijazah" size="60" />
                </label>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Bahasa Indonesia</td>
              <td>:</td>
              <td>
                <label>
                  <input type="text" name="bahasa_indonesia" size="60" />
                </label>
                          </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Matematika</td>
              <td>:</td>
              <td>
                <label>
                  <input type="text" name="matematika" size="60" />
                </label>
                       </td>
            </tr>
            <tr>
              <td>5</td>
              <td>IPA</td>
              <td>:</td>
              <td>
                <label>
                  <input type="text" name="ipa" size="60" />
                </label>
                          </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Prestasi</td>
              <td>:</td>
              <td>
                <label>
                <input type="text" name="prestasi" size="60" value=""/>
                </label>
                          </td>
            </tr>
            
          </table>
	       
          <p><strong></strong>
            <input type="submit" class="center" value="submit" />
          </p></form>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>            </p>
          <ol start="1" type="1">
            <li></li>
          </ol>
          </div>
	  </div>
      <footer><p>&nbsp;</p>
      <p><a href="http://belajarndang.com/log.php?op=out">Copyright © SMP N 1 BERBAH
</a></p>
      <a href="http://belajarndang.com/log.php?op=out">      </a></footer>
      <a href="http://belajarndang.com/log.php?op=out">
</a></div><a href="http://belajarndang.com/log.php?op=out">
  </a></div><a href="http://belajarndang.com/log.php?op=out">
  <div id="grass"></div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="E-Learning2_files/jquery_003.js"></script><script type="text/javascript" src="E-Learning2_files/jquery.js"></script><script type="text/javascript" src="E-Learning2_files/jquery_004.js"></script><script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>


</a></body></html>