<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>public/css/syle.css" />

	<script src="<?= base_url() ?>public/js/jquery.js"></script>
	<script src="<?= base_url() ?>public/js/bootstrap.js"></script>

	<title>jrDash</title>
</head>

<body>
	<h2>jrDash</h2>
	<nav class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li><a href="#">DashBoard</a></li>
				<li><a href="#">User</a></li>
				<li><a href="<?= site_url('dashboard/logout')?>">Logout</a></li>
			</ul>
		</div>

	</nav>
	<!-- incicio container wrapper -->
	<div class="wrapper">
