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
						<li>Detail Acara</li>
					</ol>
					<h2>Detail Acara</h2>
				</div>
			</section>
			<!-- End head-menu -->

			<!-- ======= detail-event Section ======= -->
            <section class="detail-event" data-aos="zoom-in-up">
                <div class="container">

                    <div class="text-center btn-print">
						<a class="btn btn-secondary" href="<?php echo site_url('appkemas/lihat_event') ?>"><i class="icofont-print">&ensp;Print Detail Acara</i></a>
					</div><br><br>
                    <?php foreach($tbevent as $tbv) : ?>
                    <div class="card" style="padding:1rem;">

                        <div class="text-left" style="padding-left:2rem; margin-bottom:10%; margin-top:2rem;">
                            <h1>Appkemas</h1>
                            <address>
                                <strong>Unity Citra Braga Kusuma Ningrat Luxury Housing, Appkemas.</strong><br>
                                Jl. Raya Siliwangi No.6, RT.001/RW.004, Sepanjang Jaya, Kec. Rawalumbu, Kota Bekasi<br>
                                Jawa Barat 17114<br>
                                Telp. (021) 82400924
                            </address>

                            
                        </div>
                        
                        <div class="gambar" style="margin-bottom:7%;">
                            <div class="text-center">
                                <img style="border: 4px solid #ddd;border-radius: 4px;padding: 5px;" src='<?= base_url() ?>assets/gambar/<?= $tbv->gambar; ?>' width="850" height="450">
                            </div>
                        </div>

                        
                        <div class="clearfix"></div>
                        <br>
                        
                        <table class="table-borderless">

                            <br>
                            <tr>
                                <td style="padding-left:2rem;">Hari</td>
                                <td>&ensp;:&ensp; <?php echo $detail->hari ?></td>
                                <div class="clearfix"></div>
                            </tr>

                            <tr>
                                <td style="padding-left:2rem;">Tanggal</td>
                                <td>&ensp;:&ensp; <?php echo $detail->tanggal ?></td>
                                <div class="clearfix"></div>
                            </tr>

                            <tr>
                                <td style="padding-left:2rem;">Jam</td>
                                <td style="padding-right:40rem;">&ensp;:&ensp; <?php echo $detail->waktu ?></td>
                                <div class="clearfix"></div>
                            </tr>
                            
                        </table>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="padding-right:15rem;">Field</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Ketua Pelaksana</td></strong>
                                        <td style=""><?php echo $detail->ketua_pelaksana ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Penanggung Jawab</td></strong>
                                        <td style=""><?php echo $detail->penanggung_jawab ?></td>
                                    </tr>
                                
                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Nama Acara</td></strong>
                                        <td style=""><?php echo $detail->nama_kegiatan ?></td>
                                    </tr>

                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Tempat</td></strong>
                                        <td style=""><?php echo $detail->tempat ?></td>
                                    </tr>

                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Anggaran</td></strong>
                                        <td style=""><?php echo $detail->anggaran ?></td>
                                    </tr>

                                    <tr>
                                        <td ><strong>Deskripsi</td></strong>
                                        <td style="padding-bottom:5rem; text-align:justify;"><?php echo $detail->deskripsi ?></td>
                                    </tr>
                                    

                                    <!-- <tr>
                                        <td colspan="4" colrows="3"><img src='<?= base_url() ?>assets/gambar/<?= $tbv->gambar; ?>' width="1000" height="400"></td>
                                    </tr> -->

                                    <tr>
                                    </tr>
                                </tbody>
                                
                                <table class="table-borderless">
                                    <div class="text-right">
                                        <h6 style="padding-bottom:8rem;"><strong><?php echo $detail->hari ?>, <?php echo $detail->tanggal ?><strong></h6>
                                        
                                        
                                        Ketua Rt/Rw
                                    </div>
                                </table>

                            </table>

                            <?php endforeach; ?>

                            <div class="text-center" style="margin-top:10rem; margin-bottom:3rem;" data-aos="zoom-out">
                                <h5 style="margin-bottom:3rem;"><strong>Sponsored by.</strong></h5>
                                <div class="owl-carousel clients-carousel" style="margin-left:2%;">
                                    <img style="height:80px;width:80px;" src="<?php echo base_url('assets/img/');?>polsek.png" alt="" />
                                    <img style="height:80px;width:80px;" src="<?php echo base_url('assets/img/');?>hospital.jpg" alt="" />
                                    <img style="height:80px;width:80px;" src="<?php echo base_url('assets/img/');?>axa.png" alt="" />
                                    <img style="height:80px;width:80px;" src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" />
                                    <img style="height:80px;width:80px;" src="<?php echo base_url('assets/img/');?>bank.jpg" alt="" />
                                    <img style="height:80px;width:80px;" src="<?php echo base_url('assets/img/');?>alamsutra.png" alt="" />
                                    <img style="height:80px;width:100px;" src="<?php echo base_url('assets/img/');?>logobiu.png" alt="" />
                                    <img style="height:60px;width:100px;" src="<?php echo base_url('assets/img/');?>client-8.png" alt="" />
                            </div>

                        </div>

                    </div>
                    <br>
                    <br>
                </div>
            </div>

            <div class="text-center" style="margin-top:10rem;" data-aos="zoom-in">
                <a class="btn btn-primary" href="<?php echo base_url('appkemas/lihat_event') ?>"><i class="icofont-arrow-left">&ensp;Kembali</i></a>
            </div>

        </section>
			<!-- End detail-event Section -->
	</main>
		<!-- End #main -->
</body>