<body>

    <!-- ======= Header ======= -->
		<header id="header-utama" class="header fixed-top">
			<div class="container d-flex align-items-center">
				<h1 class="logo mr-auto">
				<a href="<?php echo base_url('user/') ?>" class="scrollto"><img src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" class="img-fluid">&ensp;App Kemas</a>
				</h1>
				
				<nav class="nav-menu d-none d-lg-block">
					<ul>
						<li class="active"><a href="#header">Home</a></li>
						<li><a class="nav-link scrollto" href="#list-event">Daftar Acara</a></li>
						<li><a class="nav-link scrollto" href="#informasidata">Infromasi Data</a></li>
						<li><a class="nav-link scrollto" href="#lembaga">Partners</a></li>
						<li><a class="nav-link scrollto" href="#team">Pengurus</a></li>
						<li><a href="#kotak-saran">Kotak Saran</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- End Header -->

		<!-- ======= welcome Section ======= -->

		<section id="welcome" class="d-flex justify-cntent-center align-items-center">
			<div id="welcomeCarousel" class="container carousel carousel-fade" data-ride="carousel">
				<div class="carousel-item active">
					<div class="carousel-container">
						<h2 class="animate__animated animate__fadeInDown">
							Welcome to <span>App Kemas</span>
						</h2>
						<p class="animate__animated animate__fadeInUp">
							Website yang menyediakan informasi mengenai acara-acara yang diselenggarakan oleh masyarakat di Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi.
						</p>
					</div>
					<div class="carousel-footer text-center">
                        <a href="<?php echo base_url('appkemas/lihat_eventuser') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">
							List Acara&ensp;<i class="icofont-listing-box"></i>
						</a>
					</div>
				</div>
		</section>
		<!-- End welcome -->

		<main id="main">

			<!-- ======= List-event Section ======= -->
			<section id="list-event" class="portfoio">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Daftar Acara</h2>
						<p>
							Berikut adalah beberapa event yang telah dilaksanakan di Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi.
						</p>
					</div>

					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center">
							<ul id="list-event-flters">
								<li data-filter="*" class="filter-active">Semua</li>
								<li data-filter="tahunan">Tahunan</li>
								<li data-filter="bulanan">Bulanan</li>
								<li data-filter="mingguan">Mingguan</li>
							</ul>
						</div>
					</div>

					<div class="row list-event-container">
						<div class="col-lg-4 col-md-6 list-event-item tahunan">
							<img src="<?php echo base_url('assets/img/list-event/');?>agustusan.jpg" class="img-fluid" alt=""/>
							<div class="list-event-info">
								<h4>17 Agustusan</h4>
								<p>Kamis, 17 Agustus 2021</p>
								<a href="<?php echo base_url('assets/img/list-event/');?>agustusan.jpg" data-gall="list-eventGallery" class="venobox preview-link" title="17 Agustusan">
									<i class="bx bx-plus"></i>
								</a>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 list-event-item mingguan">
							<img src="<?php echo base_url('assets/img/list-event/');?>arisan.jpg" class="img-fluid" alt=""/>
							<div class="list-event-info">
								<h4>Arisan</h4>
								<p>Kamis, 6 April 2021</p>
								<a href="<?php echo base_url('assets/img/list-event/');?>arisan.jpg" data-gall="list-eventGallery" class="venobox preview-link" title="Arisan">
									<i class="bx bx-plus"></i>
								</a>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 list-event-item tahunan">
							<img src="<?php echo base_url('assets/img/list-event/');?>bukber.jpg" class="img-fluid" alt=""/>
							<div class="list-event-info">
								<h4>Buka Bersama</h4>
								<p>Minggu, 10 Mei 2021</p>
								<a href="<?php echo base_url('assets/img/list-event/');?>bukber.jpg" data-gall="list-eventGallery" class="venobox preview-link" title="Buka Bersama">
									<i class="bx bx-plus"></i>
								</a>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 list-event-item bulanan">
							<img src="<?php echo base_url('assets/img/list-event/');?>kerjabakti.jpg" class="img-fluid" alt=""/>
							<div class="list-event-info">
								<h4>Keja Bakti</h4>
								<p>Sabtu, 21 Maret 2021</p>
								<a href="<?php echo base_url('assets/img/list-event/');?>kerjabakti.jpg" data-gall="list-eventGallery" class="venobox preview-link" title="Keja Bakti">
									<i class="bx bx-plus"></i>
								</a>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 list-event-item mingguan">
							<img src="<?php echo base_url('assets/img/list-event/');?>siskamling.jpg" class="img-fluid" alt=""/>
							<div class="list-event-info">
								<h4>Siskamling</h4>
								<p>Rabu, 2 April 2021</p>
								<a href="<?php echo base_url('assets/img/list-event/');?>siskamling.jpg" data-gall="list-eventGallery" class="venobox preview-link" title="Siskamling">
									<i class="bx bx-plus"></i>
								</a>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 list-event-item bulanan">
							<img src="<?php echo base_url('assets/img/list-event/');?>kajian.jpg" class="img-fluid" alt=""/>
							<div class="list-event-info">
								<h4>Kajian Umum</h4>
								<p>Jum'at, 23 Mei 2021</p>
								<a href="<?php echo base_url('assets/img/list-event/');?>kajian.jpg" data-gall="list-eventGallery" class="venobox preview-link" title="Kajian Rutin">
									<i class="bx bx-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End List-event Section -->

			<!-- ======= informasidata Section ======= -->
			<section id="informasidata" class="informasidata">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Informasi Data</h2>
						<p>
							Berikut informasi data mengenai kependudukan dan administrasi di Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi.
						</p>
					</div>

					<div class="row">
						<div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
							<div class="icon-box">
								<i class="icofont-group" style="color: #ff7f7f;"></i>
								<h4><a href="#">Jumlah Penduduk</a></h4>
								<p>
									Berdasarkan sensus penduduk Tahun 2021, jumlah penduduk yang terdapat di Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi adalah sebanyak 40.126 ribu jiwa
								</p>
							</div>
						</div>

						<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
							<div class="icon-box">
								<i class="icofont-user" style="color: #ff7f7f;"></i>
								<h4><a href="#">Jumlah Kepala Keluarga</a></h4>
								<p>
									Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi ini terdapat 13.375 Kepala Keluarga 
								</p>
							</div>
						</div>

						<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
							<div class="icon-box">
								<i class="icofont-business-man" style="color: #ff7f7f;"></i>
								<h4><a href="#">Jumlah Kepala RT dan RW</a></h4>
								<p>
									Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi ini terdapat 254 Kepala RT dan 155 Kepala RW								
								</p>
							</div>
						</div>

						<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
							<div class="icon-box">
								<i class="icofont-court" style="color: #ff7f7f;"></i>
								<h4><a href="#">Jumlah Pos Security</a></h4>
								<p>
									Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi memiliki lebih dari 69 Pos Security yang tersebar diberbagai penjuru komplek
								</p>
							</div>
						</div>
	
					</div>
				</div>
			</section>
			<!-- End informasidata Section -->

			<!-- ======= lembaga Section ======= -->
			<section id="lembaga" class="clients">
				<div class="container" data-aos="zoom-in">
					<div class="section-title">
						<h2>Partners</h2>
					</div>
					<div class="owl-carousel clients-carousel">
						<img src="<?php echo base_url('assets/img/');?>polsek.png" alt="" />
						<img src="<?php echo base_url('assets/img/');?>hospital.jpg" alt="" />
						<img src="<?php echo base_url('assets/img/');?>axa.png" alt="" />
						<img src="<?php echo base_url('assets/img/');?>logokemas4.png" alt="" />
						<img src="<?php echo base_url('assets/img/');?>bank.jpg" alt="" />
						<img src="<?php echo base_url('assets/img/');?>alamsutra.png" alt="" />
						<img src="<?php echo base_url('assets/img/');?>logobiu.png" alt="" />
						<img src="<?php echo base_url('assets/img/');?>client-8.png" style="height: 4rem; width: 8rem;" alt="" />
					</div>
				</div>
			</section>
			<!-- End lembaga Section -->
			

			<!-- ======= ba-home Section ======= -->
			<section id="ba-home" class="ba-home">
				<div class="container">
					<div class="row" data-aos="zoom-in">
						<div class="col-lg-9 text-center text-lg-left">
							<h3>Lihat daftar acara disini !</h3>
							<p>
								Berisi informasi tentang acara-acara yang akan dilaksanakan oleh masyarakat.
							</p>
						</div>
						<div class="col-lg-3 ba-home-btn-container text-center">
							<a class="ba-home-btn align-middle" href="<?php echo base_url('appkemas/lihat_eventuser')?>">List Acara</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End ba-home Section -->

			

			<!-- ======= Team Section ======= -->
			<section id="team" class="team section-bg">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Pengurus</h2>
						<p>
							Berikut struktur organisasi pengurus Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi.
						</p>
					</div>

					<div class="row">
						<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
							<div class="member d-flex align-items-start">
								<div class="pic">
									<img src="<?php echo base_url('assets/img/team/');?>bibah.jpg" class="img-fluid" alt=""/>
								</div>
								<div class="member-info">
									<h4>Abibah Alfiansyah</h4>
									<span>Ketua Paguyuban Senam Ibu-Ibu</span>
									<p>
										Telp  &emsp;| 02122336712<br>
										Email &ensp;| bibahganteng@gmail.com
									</p>
									<div class="social">
										<a href=""><i class="ri-twitter-fill"></i></a>
										<a href=""><i class="ri-facebook-fill"></i></a>
										<a href=""><i class="ri-instagram-fill"></i></a>
										<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
							<div class="member d-flex align-items-start">
								<div class="pic">
									<img src="<?php echo base_url('assets/img/team/');?>hana.jpeg" class="img-fluid" alt=""/>
								</div>
								<div class="member-info">
									<h4>Amanda Hana</h4>
									<span>Wakil Ketua Paguyuban Senam Ibu-Ibu</span>
									<p>
										Telp  &emsp;| 02211212132<br>
										Email &ensp;| amandahana@gmail.com
									</p>
									<div class="social">
										<a href=""><i class="ri-twitter-fill"></i></a>
										<a href=""><i class="ri-facebook-fill"></i></a>
										<a href=""><i class="ri-instagram-fill"></i></a>
										<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
							<div class="member d-flex align-items-start">
								<div class="pic">
									<img src="<?php echo base_url('assets/img/team/');?>rama2.jpg" class="img-fluid" alt=""/>
								</div>
								<div class="member-info">
									<h4>Ramadhan Herdianto</h4>
									<span>Ketua DKM</span>
									<p>
										Telp  &emsp;| 021223771291<br>
										Email &ensp;| ramaaaherdi@gmail.com
									</p>
									<div class="social">
										<a href=""><i class="ri-twitter-fill"></i></a>
										<a href=""><i class="ri-facebook-fill"></i></a>
										<a href=""><i class="ri-instagram-fill"></i></a>
										<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
							<div class="member d-flex align-items-start">
								<div class="pic">
									<img src="<?php echo base_url('assets/img/team/');?>firli.jpg" class="img-fluid" alt=""/>
								</div>
								<div class="member-info">
									<h4>Firli Juli Prayitno</h4>
									<span>Wakil Ketua DKM</span>
									<p>
										Telp  &emsp;| 02199001231<br>
										Email &ensp;| firlijuliprayitno@gmail.com
									</p>
									<div class="social">
										<a href=""><i class="ri-twitter-fill"></i></a>
										<a href=""><i class="ri-facebook-fill"></i></a>
										<a href=""><i class="ri-instagram-fill"></i></a>
										<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
							<div class="member d-flex align-items-start">
								<div class="pic">
									<img src="<?php echo base_url('assets/img/team/');?>alfa.jpeg" class="img-fluid" alt=""
									/>
								</div>
								<div class="member-info">
									<h4>Muhammad Alfarizi</h4>
									<span>Ketua RT</span>
									<p>
										Telp  &emsp;| 021233121231<br>
										Email &ensp;| m.alfarizi@gmail.com
									</p>
									<div class="social">
										<a href=""><i class="ri-twitter-fill"></i></a>
										<a href=""><i class="ri-facebook-fill"></i></a>
										<a href=""><i class="ri-instagram-fill"></i></a>
										<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
							<div class="member d-flex align-items-start">
								<div class="pic">
									<img src="<?php echo base_url('assets/img/team/');?>kiki.jpeg" class="img-fluid" alt=""/>
								</div>
								<div class="member-info">
									<h4>Muhammad Rizky Darmawan</h4>
									<span>Ketua RW</span>
									<p>
										Telp  &emsp;| 02100118821<br>
										Email &ensp;| rizkydarmawan@gmail.com
									</p>
									<div class="social">
										<a href=""><i class="ri-twitter-fill"></i></a>
										<a href=""><i class="ri-facebook-fill"></i></a>
										<a href=""><i class="ri-instagram-fill"></i></a>
										<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Team Section -->


			<!-- ======= kotak-saran Section ======= -->
			<section id="kotak-saran" class="kotak-saran">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Kotak Saran</h2>
					</div>

						<div data-aos="fade-center" data-aos-delay="100">
							<form action="<?php echo site_url('appkemas/input_pesan') ?>" method="post" role="form" class="php-email-form">
								<div class="form-row">
									<div class="col-md-6 form-group">
										<input type="text" name="nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
										<div class="validate"></div>
									</div>

									<div class="col-md-6 form-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email"/>
										<div class="validate"></div>
									</div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
									<div class="validate"></div>
								</div>

								<div class="form-group">
									<textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Saran atau Pesan"></textarea>
									<div class="validate"></div>
								</div>

								<div class="text-center">
								<button type ="submit" onclick="
                                    return confirm('Kirim saran?')" onclick="document.location='input_pesan'">Kirim Pesan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End kotak-saran Section -->
		</main>
		<!-- End #main -->