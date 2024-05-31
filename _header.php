<?php 
	require_once('_functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>FahiraLaundry | Dashboard</title>
	<link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
	<link rel="shortcut icon" href="<?=url('_assets/img/logo/FahiraLaunfry.jpg')?>" type="image/x-icon">
</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<a href="<?=url()?>">
					<img src="<?=url('_assets/img/logo/LogoLaunfry.jpg')?>" alt="Rumah Laundry Logo">
				</a>
			</div>
			<ul class="nav-menu">
				<li>
					<span id=""><?= ucfirst($_SESSION['master']) ?></span>
					<ul class="dropdown-menu">
						<li><a href="<?=url('about.php')?>">About Us</a></li>
						<li><a href="<?=url('logout.php')?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="nav-mini">
			<a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="link-nav">Transaction</a>
			<a href="<?=url('karyawan/karyawan.php')?>" class="link-nav">Manage Staff</a>
			<a href="<?=url('paket/paket.php')?>" class="link-nav">List Package</a>
		</div>
	</header>