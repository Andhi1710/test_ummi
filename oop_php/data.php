<style>
body {
  background-color: #F8F8F8;
}
div.cont {
  width: 450px;
  padding: 10px 80px 30px;
  background-color: white;
  margin: 20px auto;
  box-shadow: 1px 0px 10px, -1px 0px 10px ;
}
h1 {
  text-align: center;
  font-family: Cambria, "Times New Roman", serif;
}
table {
  border-collapse:collapse;
  border-spacing:0;
  border:1px black solid;
  width:100%
}
th, td {
  padding:8px 15px;
  border:1px black solid;
}
td:first-child {
  background-color: #F2F2F2;
}
img {
  width: 80%;
  display: block;
  margin: 0px auto;
  margin-bottom: 15px;
  box-shadow: 1px 0px 5px, -1px 0px 5px #FFF;
}
  </style>
  <?php 	
include('koneksi.php');
$db = new koneksi();
$id_penduduk = $_GET['id'];
if(! is_null($id_penduduk))
{
	$data_penduduk = $db->get_by_id($id_penduduk);
}
else
{
	header('location:tampil_data.php');
}
?>
<a href="tampil_data.php" class="btn btn-primary">Kembali</a>
<div class="cont">
			<h2>Data Penduduk</h2>
      <p id="tanggal"><?php echo date("d M Y"); ?></p>
			<table>
			<tr>
			  <td>Nomor KK</td>
			  <td><?php echo $data_penduduk['no_kk'];?></td>
			</tr>
			<tr>
			  <td>NIK</td>
			  <td><?php echo $data_penduduk['nik'];?></td>
			</tr>
			<tr>
			  <td>Nama Lengkap</td>
			  <td><?php echo $data_penduduk['nama_lengkap'];?></td>
			</tr>
			<tr>
			  <td>Jenis Kelamin</td>
			  <td><?php echo $data_penduduk['jk'];?></td>
			</tr>
			<tr>
			  <td>Tanggal Lahir</td>
			  <td><?php echo $data_penduduk['tgl_lahir'];?></td>
			</tr>
			<tr>
			  <td>Id Stat Hbkel</td>
			  <td><?php echo $data_penduduk['id_stat_hbkel'];?></td>
			</tr>
			<tr>
			  <td>No RT</td>
			  <td><?php echo $data_penduduk['no_rt'];?></td>
			</tr>
			</table>
      <br>
</div>
			<div class="clearfix"> </div>
		</div>
	</div>
  
