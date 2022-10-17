<!DOCTYPE html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="style1 card-body"sty>
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="title-card text-white mb-3 d-block">Data Web</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="60" ></span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart1" data-colors='["#fefefe"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-success text-white">Active</span>
                                    <span class="ms-1 text-white font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="style2 card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="title-card text-white mb-3 d-block">Data Detail</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="8"></span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart2" data-colors='["#fefefe"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-info text-white">Active</span>
                                    <span class="ms-1 text-white font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="style3 card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="title-card text-white mb-3 d-block">Data Akun</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="4">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart3" data-colors='["#fefefe"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-success text-white">Active</span>
                                    <span class="ms-1 text-white font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="style4 card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="title-card text-white mb-3 d-block">Pratinjau Web</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="66">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart4" data-colors='["#fefefe"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-info text-white">Active</span>
                                    <span class="ms-1 text-white font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

                <div class="row">
                    <div class="col-xl-5">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Total Data</h5>
                                    <div class="ms-auto">
                                        <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1
                                            </button>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                2
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                3
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                4
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-sm">
                                        <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts"></div>
                                    </div>
                                    <div class="col-sm align-self-center">
                                        <div class="mt-4 mt-sm-0">
                                            <div>
                                                <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i> Data Web</p>
                                            </div>

                                            <div class="mt-4 pt-2">
                                                <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Data Detail</p>
                                            </div>

                                            <div class="mt-4 pt-2">
                                                <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i> Data Akun</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Data Detail</h5>
                                            <div class="ms-auto">
                                                <select class="form-select form-select-sm">
                                                    <option value="MAY" selected="">Juni</option>
                                                    <option value="AP">Juli</option>
                                                    <option value="MA">March</option>
                                                    <option value="FE">February</option>
                                                    <option value="JA">January</option>
                                                    <option value="DE">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-sm">
                                                <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                            </div>
                                            <div class="col-sm align-self-center">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="mb-1">Grafik Data</p>
                                                    <h4>Data Website</h4>

                                                    <div class="row g-0">
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="mb-2 text-muted text-uppercase font-size-11">Data</p>
                                                                <h5 class="fw-medium">4</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="mb-2 text-muted text-uppercase font-size-11">Website</p>
                                                                <h5 class="fw-medium">66</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <!-- CARD SLIDE ANIMATION -->
                            <div class="col-xl-4">
                                <!-- card -->
                                <div class="card bg-primary text-white shadow-primary card-h-100">
                                    <!-- card body -->
                                    <div class="card-body p-0">
                                        <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="text-center p-4">
                                                        <i class="mdi mdi-telegram widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <i class="mdi mdi-telegram"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Message</b> News</h4>
                                                        <p class="text-white-50 font-size-13"> Aplikasi Monitoring adalah aplikasi berbasis website untuk memonitor website yang berjalan di Server TVRI.
                                                        </p>
                                                        <button type="button" class="btn btn-light ">View Details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <!-- end carousel-item -->
                                                <div class="carousel-item">
                                                    <div class="text-center p-4">
                                                        <i class="mdi mdi-tooltip widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <i class="mdi mdi-tooltip"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>Notifications</b></h4>
                                                        <p class="text-white-50 font-size-13"> Dashboard ini hanya tampilan saja, tanpa ada fungsi didalamnya</p>
                                                        <button type="button" class="btn btn-light">View Details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <!-- end carousel-item -->
                                                <div class="carousel-item">
                                                    <div class="text-center p-4">
                                                        <i class="mdi mdi-human-greeting widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <i class="mdi mdi-human-greeting"></i>
                                                            </span>
                                                        </div>
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><b>IT Support</b> TVRI</h4>
                                                        <p class="text-white-50 font-size-13"> Selamat Pagi Admin, <br> Tetap Semangat <br> Dan Sehat Selalu. </p>
                                                        <button type="button" class="btn btn-light btn-sm">View Details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <!-- end carousel-item -->
                                            </div>
                                            <!-- end carousel-inner -->

                                            <div class="carousel-indicators carousel-indicators-rounded">
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carousel-indicators -->
                                        </div>
                                        <!-- end carousel -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                </div> <!-- end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>