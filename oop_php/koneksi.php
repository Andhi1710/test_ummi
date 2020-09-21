<?php 
class koneksi{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "penduduk";
	var $konek = "";
	function __construct(){
		$this->konek = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil()
	{
		$data = mysqli_query($this->konek,"select * from data_penduduk, hubungan_keluarga where data_penduduk.id_stat_hbkel=hubungan_keluarga.id_stat_hbkel order by id_penduduk desc");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function tambah($no_kk,$nik,$nama_lengkap,$jk,$tgl_lahir,$id_stat_hbkel,$no_rt)
	{
		mysqli_query($this->konek,"insert into data_penduduk values ('','$no_kk','$nik','$nama_lengkap','$jk','$tgl_lahir','$id_stat_hbkel','$no_rt','','')");
	}

	function get_by_id($id_penduduk)
	{
		$query = mysqli_query($this->konek,"select * from data_penduduk where id_penduduk='$id_penduduk'");
		return $query->fetch_array();
	}

	function update($no_kk,$nik,$nama_lengkap,$jk,$tgl_lahir,$id_stat_hbkel,$no_rt,$id_penduduk)
	{
		$query = mysqli_query($this->konek,"update data_penduduk set no_kk='$no_kk',nik='$nik',nama_lengkap='$nama_lengkap',jk='$jk',tgl_lahir='$tgl_lahir',id_stat_hbkel='$id_stat_hbkel',no_rt='$no_rt' where id_penduduk='$id_penduduk'");
	}

	function delete($id_penduduk)
	{
		$query = mysqli_query($this->konek,"delete from data_penduduk where id_penduduk='$id_penduduk'");
	}

	function laporan_pdf(){

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan_penduduk.pdf";
    $this->pdf->load_view('laporan_pdf', $data);
	}
}
?>