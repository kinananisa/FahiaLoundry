<?php 
	require_once('../_header.php');
	$cs_number = $_GET['or_cs_number'];
?>

<?php if (del_or_cs($cs_number) > 0) : ?>
	<!-- Statement 1 -->
	<div class="alert">
		<div class="box">
		<img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
			<p>Data Terhapus</p>
			<button onclick="window.location='http://localhost/FahiraLaudry/'" class="btn-alert">Ok</button>
		</div>
	</div>
	<?php else : ?>
		<!-- Statement 2 -->
		<div class="alert">
			<div class="box">
			<img src="<?=url('_assets/img/gagal.png')?>" height="68" alt="alert gagal">
				<p>Data Gagal Terapus</p>
				<button onclick="window.location='http://localhost/FahiraLaundry/'" class="btn-alert">Ok</button>
			</div>
		</div>
<?php endif ?>