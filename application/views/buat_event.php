<body>

	<!-- ======= Header ======= -->
	<header id="header-tampil" class="header fixed-top">
			<div class="container d-flex align-items-center">
				<h1 class="logo mr-auto">
                <a href="<?php echo base_url('admin/') ?>" class="scrollto"><img src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" class="img-fluid">&ensp;App Kemas</a>
				</h1>
				
				<nav class="nav-menu d-none d-lg-block">
					<ul>
                        <li><a class="nav-link scrollto" href="#buat-event">Buat Acara</a></li>
						<li><a class="nav-link scrollto" href="<?php echo base_url('appkemas/lihat_event') ?>">List Acara</a></li>
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
						<li>Buat Acara</li>
					</ol>
					<h2>Buat Acara</h2>
				</div>
			</section>
			<!-- End head-menu -->

			<!-- ======= buat-event Section ======= -->
			<section id="buat-event" class="buat-event">
				<div class="container" data-aos="fade-up">
					
                <div class="card card-register shadow-sm mx-auto mt-5">
                    <div class="card-header">
                        <a href="<?php echo site_url('appkemas/lihat_event/') ?>"><i class="icofont-arrow-left"></i> kembali</a>
                    </div>
                    <div class="card-body">

                    <form action="<?php echo site_url('appkemas/tambah_event') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Ketua_Pelaksana" style="font-weight:600">Ketua Pelaksana</label>
                                <input type="text" name="ketua_pelaksana" id="Ketua_Pelaksana" class="form-control" placeholder="ketua Pelaksana" required=""></input>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Penanggung_jawab" style="font-weight:600">Penanggung Jawab</label>
                                <input type="text" name="penanggung_jawab" id="Penanggung_jawab" class="form-control" placeholder="penanggung jawab" required=""></input>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Nama_Kegiatan" style="font-weight:600">Nama Acara</label>
                                <input type="text" id="Nama_Kegiatan" name="nama_kegiatan" class="form-control" placeholder="nama acara" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Tempat" style="font-weight:600">Tempat</label>
                                <input type="text" name="tempat" id="Tempat" class="form-control" placeholder="tempat" required=""></input>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Hari" style="font-weight:600">Hari</label>
                                <input type="text" id="Hari" name="hari" class="form-control" placeholder="hari" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Tanggal" style="font-weight:600">Tanggal</label>
                                <input type="date" id="Tanggal" name="tanggal" class="form-control" placeholder="tanggal" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Waktu" style="font-weight:600">Jam</label>
                                <input type="time" id="Waktu" name="waktu" class="form-control" placeholder="jam" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Anggaran" style="font-weight:600">Anggaran</label>
                                <input type="text" name="anggaran" id="Anggaran" class="form-control" placeholder="anggaran" required=""></input>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Deskripsi" style="font-weight:600">Deskripsi</label>
                                <textarea name="deskripsi" id="Deskripsi" class="form-control" placeholder="deskripsi" style="height:10rem;" required=""></textarea>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <label for="gambar" style="font-weight:600">Gambar</label>
                                        <input type="file" name="gambar" id="gambar" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                    </div>
                                </div>
                            </div>
                    </div><br/>


                        <!-- <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <label for="gambar" style="font-weight:600">Gambar</label>
                                        <input type="file" name="gambar" id="gambar" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                    </div>
                                </div>
                            </div>
                        </div><br/> -->
                        <div class="button-register">
                            <button type ="submit" class="btn btn-primary" onclick="
                                    return confirm('Buat Acara?')" onclick="document.location='tambah_event'">Buat Acara</button>&emsp;
                            <button type ="reset" class="btn btn-danger">Batal</button>
                        </div>


                    </form>

                    </div>
                </div>
					
				</div>
			</section>
			<!-- End buat-event Section -->
		</main>
		<!-- End #main -->
</body>