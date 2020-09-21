
<?php
include('koneksi.php');
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;
$db = new koneksi();
$data_penduduk = $db->tampil();
$html = '<center><h3>Daftar Nama Penduduk</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
            <th>N0</th>
			<th>N0_KK</th>
			<th>NIK</th>
			<th>Nama Lengkap</th>
			<th>Id Stat Hbkel</th>
			<th>No RT</th>
			<th>Tanggal Dibuat</th>
			<th>Tanggal Update</th>
 </tr>';
$no = 1;
foreach($data_penduduk as $row){
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['no_kk']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['id_stat_hbkel']."</td>
 <td>".$row['no_rt']."</td>
 <td>".$row['tanggal_create']."</td>
 <td>".$row['tanggal_update']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_penduduk.pdf');
?>