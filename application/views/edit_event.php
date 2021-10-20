<body>

	<!-- ======= Header ======= -->
	<header id="header-tampil" class="header fixed-top">
			<div class="container d-flex align-items-center">
				<h1 class="logo mr-auto">
                    <a href="<?php echo base_url('admin/') ?>" class="scrollto"><img src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" class="img-fluid">&ensp;App Kemas</a>
				</h1>
			</div>
	</header>
		<!-- End Header -->

		<main id="main">
			<!-- ======= head-menu ======= -->
			<section class="head-menu">
				<div class="container">
					<ol>
						<li><a href="<?php echo base_url('appkemas/admin') ?>">Home</a></li>
						<li>Edit Acara</li>
					</ol>
					<h2>Edit Acara</h2>
				</div>
			</section>
			<!-- End head-menu -->

			<!-- ======= edit-event Section ======= -->
			<section id="buat-event" class="buat-event" data-aos="fade-up">
				<div class="container">
					
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header">
                        <a href="<?php echo site_url('appkemas/lihat_event/') ?>"><i class="icofont-arrow-left"></i> kembali</a>
                    </div>
                    <div class="card-body">

                    <form action="<?php echo site_url('appkemas/update') ?>" method="post" enctype="multipart/form-data">
                    <?php foreach($tbevent as $tbv) : ?>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Ketua_pelaksana" style="font-weight:600">Ketua Pelaksana</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $tbv->id ?>">
                                <input type="text" id="Ketua_pelaksana" name="ketua_pelaksana" class="form-control" value="<?php echo $tbv->ketua_pelaksana ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Penanggung_jawab" style="font-weight:600">Penanggung Jawab</label>
                                <input type="text" id="Penanggung_jawab" name="penanggung_jawab" class="form-control" value="<?php echo $tbv->penanggung_jawab ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Nama Kegiatan" style="font-weight:600">Nama Acara</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $tbv->id ?>">
                                <input type="text" id="Nama Kegiatan" name="nama_kegiatan" class="form-control" value="<?php echo $tbv->nama_kegiatan ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Tempat" style="font-weight:600">Tempat</label>
                                <input type="text" name="tempat" id="Tempat" class="form-control" value="<?php echo $tbv->tempat ?>"></input>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Hari" style="font-weight:600">Hari</label>
                                <input type="text" name="hari" id="Hari" class="form-control" value="<?php echo $tbv->hari ?>"></input>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Tanggal" style="font-weight:600">Tanggal</label>
                                <input type="date" id="Tanggal" name="tanggal" class="form-control" value="<?php echo $tbv->tanggal ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Waktu" style="font-weight:600">Jam</label>
                                <input type="time" id="Waktu" name="waktu" class="form-control" value="<?php echo $tbv->waktu ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Anggaran" style="font-weight:600">Anggaran</label>
                                <input type="text" id="Anggaran" name="anggaran" class="form-control" value="<?php echo $tbv->anggaran ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Deskripsi" style="font-weight:600">Deskripsi</label>
                                <textarea type="text" id="Deskripsi" name="deskripsi" class="form-control" style="height:10rem;"><?php echo $tbv->deskripsi ?></textarea>
                            </div>
                        </div>

                        <div>
                            <img style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;" src='<?= base_url()?>assets/gambar/<?=$tbv->gambar; ?>' height="300" widht="450">
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="file" name="gambar" palceholder="Foto" required>
                                        <label for="foto">Upload Foto Baru</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                </div>
                            </div>
                        </div>


                        
                        <div class="button-register">
                            <button type ="submit" class="btn btn-warning" style="color: #ffff;" onclick="
                                    return confirm('Edit Acara?')" onclick="document.location='update_event'">Edit Event</button>&emsp;
                            <button type ="reset" class="btn btn-danger">Batal</button>
                        </div>

                    <?php endforeach; ?>
                    </form>

                    </div>
                </div>
					
				</div>
			</section>
			<!-- End edit-event Section -->
		</main>
		<!-- End #main -->
</body>