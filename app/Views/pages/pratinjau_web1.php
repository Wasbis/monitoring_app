<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <!-- Responsive Table css -->
    <link href="assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Monitoring Apps <br> <span class="mb-sm-0 font-size-12" style="font-weight:10px;">dibuat untuk monitoring beberapa Aplikasi/Website di TVRI</span> </h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active">Pratinjau Web</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">

                                        <!-- TAMPIL DATA TABLE -->
                                        <table id="tech-companies-1" class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th style="font-size:15px;">No</th>
                                                    <th data-priority="1" style="font-size:15px;">Nama Aplikasi/Website</th>
                                                    <th data-priority="3" style="font-size:15px;">Domain</th>
                                                    <th data-priority="1" style="font-size:15px;">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($web as $w) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $i++; ?></th>
                                                        <td style="font-size:15px;"><?= $w['nama']; ?></td>
                                                        <td style="font-size:15px;"><?= $w['domain']; ?></td>
                                                        <td style="font-size:15px;"><a href="http://<?= $w['domain']; ?>/" class="badge badge-soft-info" target="_blank">Link</a></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <?= $this->include('partials/right-sidebar') ?>

    <!-- JAVASCRIPT -->
    <?= $this->include('partials/vendor-scripts') ?>

    <!-- Responsive Table js -->
    <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>

    <!-- Init js -->
    <script src="assets/js/pages/table-responsive.init.js"></script>

    <script src="assets/js/app.js"></script>

    </body>

</html>