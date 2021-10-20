<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
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
    <a class="nav-link" href="<?= base_url('user/profile'); ?>">
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
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card mb-3 shadow-sm" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4" style="padding:1rem;">
                                <img src="<?= base_url('assets2/img/profile/') . $user['image'];?>" alt="..." width="100" height="100">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $user['nama']; ?></h5>
                                <p class="card-text"><?= $user['email']; ?></p>
                                <p class="card-text"><small class="text-muted">Bergabung sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            