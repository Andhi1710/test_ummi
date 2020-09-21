<?php
    $old = (object) @$_GET['old'];
    $errors = (object) @$_GET['errors'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<tittle>Tambah Data Penduduk</tittle>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/jquery-ui.css" />
	 
   <!-- framework bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker.min.css">
  <script src="datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="datepicker/locales/bootstrap-datepicker.id.min.js"></script>

  <script>
  $( function() {
    $( "#date" ).datepicker({
      autoclose:true,
      todayHighlight:true,
      format:'yyyy-mm-dd',
      language: 'id'
    });
  } );
  </script>
  
</head>
<body>
<hr/>
<form method="post" action="proses.php">
<div class="container">
<div class="card card-login mx-auto mt-4">
<div class="card-header">
<h1>Form Tambah Data</h1>
    <hr>
	<div class="form-group">
		<label for="no_kk"><b>Nomor KK :</b></label>
		<input type="text" placeholder="Masukan Nomor KK" class="form-control" name="no_kk" value="<?php echo @$old->no_kk ?>"/>
		<?php
            if (@$errors->no_kk):?>
                <div style="color: red"><?php echo $errors->no_kk[0] ?></div>
            <?php
            endif; ?>
	</div>
	<div class="form-group">
		<label for="nik"><b>NIK :</b></label>
		<input type="text"  placeholder="Masukan NIK" class="form-control" name="nik" value="<?php echo @$old->nik ?>"/>
		<?php
            if (@$errors->nik):?>
                <div style="color: red"><?php echo $errors->nik[0] ?></div>
            <?php
            endif; ?>
	</div>
	<div class="form-group">
		<label for="nama_lengkap"><b>Nama Lengkap</b></label>
		<input type="text" placeholder="Masukan Nama Lengkap" class="form-control" name="nama_lengkap" value="<?php echo @$old->nama_lengkap ?>" />
		<?php
            if (@$errors->nama_lengkap):?>
                <div style="color: red"><?php echo $errors->nama_lengkap[0] ?></div>
            <?php
            endif; ?>
	</div>
	<div class="form-group">
		<label for="jk"><b>Jenis Kelamin</b></label>
		<input type="radio" name="jk"
		<?php if (isset($jk) && $jk=="Laki-Laki") echo "checked";?> value="Laki-Laki"/> Laki - Laki
		<input type="radio" name="jk"
		<?php if (isset($jk) && $jk=="Perempuan") echo "checked";?> value="Perempuan"/> Perempuan
		<?php
            if (@$errors->jk):?>
                <div style="color: red"><?php echo $errors->jk[0] ?></div>
            <?php
            endif; ?>
	</div>
	<div class="form-group">
      <label for="tgl_lahir"><b>Tanggal Lahir</b></label>
        <input type="text" id="date" placeholder="YYYY-MM-DD" name="tgl_lahir" class="form-control"  value="<?php echo @$old->tgl_lahir ?>" required/>
     		<?php
            if (@$errors->tgl_lahir):?>
                <div style="color: red"><?php echo $errors->tgl_lahir[0] ?></div>
            <?php
            endif; ?>
	  </div>      
	<div class="form-group">
	<label for="id_stat_hbkel"><b>Hubungan Keluarga:</b></label>
	<select id="id_stat_hbkel" class="form-control" name="id_stat_hbkel" value="id_stat_hbkel"/>
			<option value="">Pilih......</option>
  			<option value="1">1. Kepala Keluarga</option>
  			<option value="2">2. Suami</option>
			<option value="3">3. Istri</option>
  			<option value="4">4. Anak</option>
			<option value="5">5. Menantu</option>
  			<option value="6">6. Cucu</option>
			<option value="7">7. Orangtua</option>
  			<option value="8">8. Mertua</option>
			<option value="9">9. Family Lain</option>
  			<option value="10">10. Pembantu</option>
  			<option value="11">11. Lainnya</option>
	</select>
	</div>
	<div class="form-group">
		<label for="no_rt"><b>NO RT :</b></label>
		<input type="text"  placeholder="Masukan Nomor RT" class="form-control" name="no_rt" value="<?php echo @$old->no_rt ?>"/>
		<?php
            if (@$errors->no_rt):?>
                <div style="color: red"><?php echo $errors->no_rt[0] ?></div>
            <?php
            endif; ?></td>
	</div>
	<input type="submit" class="btn btn-success" name="tombol" value="Simpan"/>
	</div>

<script type="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>