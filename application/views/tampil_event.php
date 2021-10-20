<body>

	<!-- ======= Header ======= -->
	<header id="header-tampil" class="header fixed-top">
			<div class="container d-flex align-items-center">
				<h1 class="logo mr-auto">
					<a href="<?php echo base_url('admin/') ?>" class="scrollto"><img src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" class="img-fluid">&ensp;App Kemas</a>
				</h1>
				
				<nav class="nav-menu d-none d-lg-block">
					<ul>
						<li><a class="nav-link scrollto" href="#tampil-event">List Acara</a></li>
						<li><a class="nav-link scrollto" href="<?php echo base_url('appkemas/buat_event') ?>">Buat Acara</a></li>
					</ul>
				</nav>
			</div>
		</header>	
		<!-- End Header -->

		<main id="main">
			<!-- ======= head-menu ======= -->
			<section class="head-menu">
				<div class="container">
					<ol>
						<li><a href="<?php echo base_url('appkemas/admin') ?>">Home</a></li>
						<li>List Acara</li>
					</ol>
					<h2>List Acara</h2>
				</div>
			</section>
			<!-- End head-menu -->

			<!-- ======= tampil-event Section ======= -->
			<section id="tampil-event" class="tampil-event">
				<div class="container" data-aos="fade-up">
					
					<div class="card-header">
						<a class="btn btn-primary" href="<?php echo site_url('appkemas/buat_event') ?>"><i class="icofont-plus">&ensp;Buat Acara Baru</i></a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Gambar</th>
										<th>Nama Acara</th>
										<th colspan="2">Tempat</th>
										<th></th>
										<th>Hari</th>
										<th></th>
										<th>Tanggal</th>
										<th></th>
										<th>Jam</th>
										<th></th>
										<th colspan="5">Setting</th>
									</tr>
								</thead>
								<?php
								$no=1;
								foreach($tbevent as $tbv) { ?>
								<tbody>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><img style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;" src='<?= base_url() ?>assets/gambar/<?= $tbv->gambar; ?>' width="200" height="150"></td>
										<td><?php echo $tbv->nama_kegiatan ?></td>
										<td colspan="2"><?php echo $tbv->tempat ?></td>
										<td></td>
										<td><?php echo $tbv->hari ?></td>
										<td></td>
										<td><?php echo $tbv->tanggal ?></td>
										<td></td>
										<td><?php echo $tbv->waktu ?></td>
										<td></td>
										<td></td>
										<td>
											<?php echo anchor('appkemas/detail/'. $tbv->id, '<div class="btn btn-success btn-sm"><i class="icofont-clip" style="color:white;"> detail</i></div>') ?>
										</td>
										<td>
											<?php echo anchor('appkemas/edit_event/'. $tbv->id, '<div class="btn btn-warning btn-sm"><i class="icofont-edit" style="color:white;"> edit</i></div>') ?>
										</td>
										<td onclick="javascript: return confirm('Yakin dihapus?')">
											<?php echo anchor('appkemas/hapus/'.$tbv->id, '<div class="btn btn-danger btn-sm"><i class="icofont-ui-delete"> hapus</i></div>') ?>
										</td>
										<td></td>
									</tr>
								</tbody>
								<?php } ?>
							</table>
						</div>
					</div>
					
				</div>
			</section>
			<!-- End tampil-event Section -->
		</main>
		<!-- End #main -->
</body>