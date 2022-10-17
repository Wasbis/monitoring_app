<header id="page-topbar">
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-sm navbar-header">
        <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Monitoring App</span>
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Monitoring App</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                <img src="assets/images/tvri-clear.png" alt="" height="40">
            </span>
            <!-- Contact -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <i class="mdi mdi-email"></i><b> itlpptvri@tvri.go.id</b>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <!-- Button Dark Mode-->
                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item" id="mode-setting-btn">
                        <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                        <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                    </button>
                </div>
                <!-- Login Menu -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/admin1.jpg" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= lang('Files.Admin') ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- REGISTER BUTTON -->
                        <a class="dropdown-item" href="/login"><i class="mdi mdi-account-plus-outline font-size-16 align-middle me-1"></i> <?= lang('Files.Login') ?></a>
                        <!-- LOGOUT BUTTON -->
                        <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?= lang('Files.Logout') ?></a>
                    </div>
                </div>
            </div>
    </nav>
</header>