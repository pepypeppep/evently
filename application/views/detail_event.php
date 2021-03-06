<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Evently | E-Recruitment</title>

		<!-- Bootstrap core CSS -->
		 <!-- Bootstrap core CSS -->
    	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
    	<link href="<?php echo base_url(); ?>assets/css/modern-business.css" rel="stylesheet">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/lambangevent.ico" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/styles.css">
	</head>

	<body>

		<nav class="navbar fixed-top navbar-expand-lg bg-white fixed-top">
			<div class="container">
				
				<!-- LOGO -->
				<div class="logo" style="width: 250px"> 
				  <a href="<?php echo base_url(); ?>" title="Evently"><img src="<?php echo base_url(); ?>assets/images/evently.png" alt="Evently" /></a>
				</div>

				<div class="collapse" id='cssmenu'>
					<ul>
						<li class='active'><a href='<?php echo base_url();?>'>Event</a></li>
						<li><a href='<?php echo base_url();?>about'>Tentang</a></li>
						<li><a href='<?php echo base_url();?>contact'>Kontak</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<header>

			<!-- Page Content -->
			<div class="container">

				<!-- Page Heading/Breadcrumbs -->
				<h1 class="mt-4 mb-3"><?php echo $nama; ?>
				<small>|
				  <a><?php echo $judul; ?></a>
				</small>
				</h1>

				<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo base_url();?>">Beranda</a>
				</li>
				<li class="breadcrumb-item active">Detail Event</li>
				</ol>

				<div class="row">

					<!-- Post Content Column -->
					<div class="col-lg-8">

						<!-- Preview Image -->
						<img class="img-fluid rounded" src="<?php echo base_url(); ?>assets/poster/<?php echo $poster; ?>" alt="">

						<hr>

						<!-- Date/Time -->
						<p>Pendaftaran tanggal <?php echo DateTime::createFromFormat('Y-m-d', $mulai)->format('j F Y'); ?> - <?php echo DateTime::createFromFormat('Y-m-d', $selesai)->format('j F Y'); ?></p>

						<hr>

						<!-- Post Content -->
						
						<p><?php echo $deskripsi; ?>.</p>
						<hr>
						<br>
					</div>
					
					<!-- Sidebar Widgets Column 
					<div class="col-md-4">
						
						<div class="card mb-4">
							<h5 class="card-header">Daftar Sekarang!</h5>
							<div class="card-body">
								<?php if (date('Y-m-d')>=DateTime::createFromFormat('Y-m-d', $mulai)->format('j F Y') and date('Y-m-d')<=DateTime::createFromFormat('Y-m-d', $selesai)->format('j F Y')) {echo "";}else{echo "<p>Pendaftaran belum dibuka / sudah ditutup</p>";}?>
								<form method="post" action="<?php echo base_url(); ?>viewDetail/<?php echo $id_event; ?>">
									<input style="width: 100%;" class="btn btn-info" type="submit" value="Daftar" <?php if (date('Y-m-d')<=DateTime::createFromFormat('Y-m-d', $mulai)->format('j F Y') and date('Y-m-d')>=DateTime::createFromFormat('Y-m-d', $selesai)->format('j F Y')) {echo "";}else{echo "disabled=true";}?> >
								</form>
							</div>
						</div>

						
						<div class="card my-4">
							<h5 class="card-header">Tanggal Registrasi</h5>
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<p>Dari<br><font size="20px;"><b><?php echo DateTime::createFromFormat('Y-m-d', $mulai)->format('j'); ?></b></font> <br><?php echo DateTime::createFromFormat('Y-m-d', $mulai)->format('F Y'); ?> </p>
									</div>	
									<div class="col-md-6" >
										<p>Sampai<br><font size="20px;"><b><?php echo DateTime::createFromFormat('Y-m-d', $selesai)->format('j'); ?></b></font> <br><?php echo DateTime::createFromFormat('Y-m-d', $selesai)->format('F Y'); ?> </p>
									</div>-->

				<!-- Sidebar Widgets Column -->
				<div class="col-md-4">
					<!-- Side Widget -->
					<div class="card my-4">
						<h5 class="card-header">Tanggal Registrasi</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<p>Dari<br><font size="20px;"><b><?php echo DateTime::createFromFormat('Y-m-d', $mulai)->format('j'); ?></b></font> <br><?php echo DateTime::createFromFormat('Y-m-d', $mulai)->format('F Y'); ?> </p>
								</div>	
								<div class="col-md-6" >
									<p>Sampai<br><font size="20px;"><b><?php echo DateTime::createFromFormat('Y-m-d', $selesai)->format('j'); ?></b></font> <br><?php echo DateTime::createFromFormat('Y-m-d', $selesai)->format('F Y'); ?> </p>
								</div>
							</div>
						</div>
					</div>
					<!-- Search Widget -->
					<div class="card mb-4">
						<h5 class="card-header">Daftar Sekarang!</h5>
						<div class="card-body">
								<br>
							<form method="post" action="<?php echo base_url(); ?>viewDetail/<?php echo $id_event; ?>">
								<input style="width: 100%;" class="btn btn-info" type="submit" value="Daftar" <?php if (date('Y-m-d')>=$mulai and date('Y-m-d')<=$selesai) {echo "";}else{echo "disabled=true";}?> >
							</form>
						</div>
					</div>
					<?php $wMulai = date ("Y-m-d", strtotime ($selesai ."+1 days")); $wSelesai = date ("Y-m-d", strtotime ($selesai ."+2 days")); ?>
					<!-- Side Widget -->
					<div class="card my-4">
						<h5 class="card-header">Tanggal Wawancara</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<p>Dari<br><font size="20px;"><b><?php echo DateTime::createFromFormat('Y-m-d', $wMulai)->format('j'); ?></b></font> <br><?php echo DateTime::createFromFormat('Y-m-d', $wMulai)->format('F Y'); ?> </p>
								</div>	
								<div class="col-md-6" >
									<p>Sampai<br><font size="20px;"><b><?php echo DateTime::createFromFormat('Y-m-d', $wSelesai)->format('j'); ?></b></font> <br><?php echo DateTime::createFromFormat('Y-m-d', $wSelesai)->format('F Y'); ?> </p>
								</div>
							</div>
						</div>
					  
						<!-- Categories Widget -->
						<div class="card my-4">
							<h5 class="card-header">Sie</h5>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6">
										<ul class="list-unstyled mb-0">
											<?php
												if(!empty($sie))
												{
													foreach ($sie as $si)
											{?>
											<li>
												<a><font color="#007bff"><?php echo $si->nama; ?></font></a>
											</li>
											<?php 
													}
												}
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</header>
		<!-- /.container -->

		<!-- Footer -->
		<footer class="py-3 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Proyek SI 2017</p>
			</div>
			<!-- /.container -->
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>
</html>