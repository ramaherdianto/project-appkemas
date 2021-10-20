<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('user/') ?>">
    <div class="sidebar-brand-icon">
        <img src="<?php echo base_url();?>/assets/img/logokemas4.png" rel="icon" height=40" width="40" />
    </div>
    <div class="sidebar-brand-text mx-3">Appkemas</div>
</a>



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User
</div>


<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user/index'); ?>">
        <i class="fas fa-fw fa-home"></i>
        <span>Home</span></a>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user/profile') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>My Profile</span></a>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('appkemas/lihat_eventuser'); ?>">
        <i class="fas fa-fw fa-list"></i>
        <span>List Acara</span></a>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" onclick="javascript: return confirm('Yakin Logout?')" href="<?= base_url('auth/logout'); ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                    <img class="img-profile rounded-circle"
                        src="<?= base_url('assets2/img/profile/') . $user['image']; ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('user/profile') ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        My Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

        

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <body>


		<!-- ======= welcomeuser Section ======= -->

		<section id="welcomeuser" class="d-flex justify-cntent-center align-items-center">
			<div id="welcomeuserCarousel" class="container carousel carousel-fade" data-ride="carousel">
				<div class="carousel-item active">
					<div class="carousel-container">
						<h2 class="animate__animated animate__fadeInDown">
							welcome to <span>App Kemas</span>
						</h2>
						<p class="animate__animated animate__fadeInUp">
							Website yang menyediakan informasi mengenai acara-acara yang diselenggarakan oleh masyarakat di Unity Citra Braga Kusuma Ningrat Luxury Housing kota Bekasi.
						</p>
					</div>
					<div class="carousel-footer text-center">
                        <a href="<?php echo base_url('appkemas/user') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">
							Landing Page&ensp;<i class="icofont-listing-box"></i>
						</a>
					</div>
				</div>
		</section>
		<!-- End welcomeuser -->

        
            