<?php 	
include('koneksi.php');
$db = new koneksi();
$data_penduduk = $db->tampil();
?>
<!DOCTYPE html>
<html>
<head>
	<title> DATA PENDUDUK </title>

	<!-- Custom fonts for this template -->
	<link href="Datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="DataTables/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="DataTables/css/dataTables.bootstrap4.min.css"
</head>
<body>
 <center>
        <h2>Menampilkan</h2>
    </center>
	
    <div class="container">
        <br>
		 <div class="card shadow mb-4">
            <div class="card-header py-3">
			<a href="tambah_data.php" class="btn btn-info"> Tambah Baru</a>
			<a href="report.php" target="_blank" class="btn btn-warning">Cetak ke PDF</a>
              <center><h3 class="m-0 font-weight-bold text-primary">Data Penduduk</h3></center>
            </div>
            <div class="card-body">
		<div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
		<tr>
			<th>N0</th>
			<th>Nomor Kartu Keluarga</th>
			<th>NIK</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Umur</th>
			<th>Hubungan Keluarga</th>
			<th>No RT</th>
			<th>Tanggal Dibuat</th>
			<th>Tanggal Update</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		
		<?php 
		$no = 1;
		foreach($data_penduduk as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['no_kk']; ?></td>
				<td><?php echo $row['nik']; ?></td>
				<td><?php echo $row['nama_lengkap']; ?></td>
				<td><?php echo $row['jk']; ?></td>
				<td><?php echo $row['tgl_lahir']; ?></td>
				<td><?php $lahir    =new DateTime($row['tgl_lahir']);
                        $today      =new DateTime();
                        $umur 		= $today->diff($lahir);
                        echo $umur->y; echo " Tahun "; 
                    ?>
                </td>
				<td><?php if($row['stat_hbkel'] == "Kepala Keluarga")
					{
						echo "<font color='green'>KEPALA KELUARGA</font>";
					}
					else
					{
						echo $row['stat_hbkel'];
					}    ?></td>
				<td><?php echo $row['no_rt']; ?></td>
				<td><?php echo $row['tanggal_create']; ?></td>
				<td><?php echo $row['tanggal_update']; ?></td>
				<td nowrap="nowrap">
					<a href="data.php?id=<?php echo $row['id_penduduk']; ?>" class="btn btn-primary">Detail</a>
					<a href="edit.php?id=<?php echo $row['id_penduduk']; ?>" class="btn btn-success">Update</a>
					<a href="proses_penduduk.php?action=delete&id=<?php echo $row['id_penduduk']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	</div>
	</div>
    </div>
	<script type="text/javascript" src="DataTables/js/jquery.min.js"></script>
	<script src="DataTables/js/jquery.dataTables.min.js"></script>
  	<script src="DataTables/js/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  	<script src="DataTables/js/datatables-demo.js"></script>

	</script>
</body>
</html>