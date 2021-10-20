<body>

	<!-- ======= Header ======= -->
	<header id="header-tampil" class="header fixed-top">
			<div class="container d-flex align-items-center">
				<h1 class="logo mr-auto">
                    <a href="<?php echo base_url('appkemas/') ?>" class="scrollto"><img src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" class="img-fluid">&ensp;App Kemas</a>
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
						<li>Detail Pesan</li>
					</ol>
					<h2>Detail Pesan</h2>
				</div>
			</section>
			<!-- End head-menu -->

			<!-- ======= detail-event Section ======= -->
            <section class="detail-event" data-aos="zoom-in-up">
                <div class="container">

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
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Nama</td></strong>
                                        <td style=""><?php echo $detail_pesan->nama ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Email</td></strong>
                                        <td style=""><?php echo $detail_pesan->email ?></td>
                                    </tr>
                                
                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Subject</td></strong>
                                        <td style=""><?php echo $detail_pesan->subjek ?></td>
                                    </tr>

                                    <tr>
                                        <td style="padding-bottom:3rem;padding-right:15rem;"><strong>Pesan dan Saran</td></strong>
                                        <td style=""><?php echo $detail_pesan->pesan ?></td>
                                    </tr>

                                    <tr>
                                    </tr>
                                </tbody>

                            </table>

                        </div>

                    </div>
                    <br>
                    <br>
                </div>
            </div>

            <div class="text-center" style="margin-top:10rem;" data-aos="zoom-in">
                <a class="btn btn-primary" href="<?php echo base_url('appkemas/admin') ?>"><i class="icofont-arrow-left">&ensp;Kembali</i></a>
            </div>

        </section>
			<!-- End detail-event Section -->
	</main>
		<!-- End #main -->
</body>