<!doctype html>
<html lang="en">

<head>
    <!-- Title Bar -->
    <?= $title_meta ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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

                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18"></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Web</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Button Add -->
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"><span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item btn-custom">
                                        <a class="nav-link " href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul" style="color:white"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- BUTTON ADD -->
                            <div>
                                <a href="#" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>

                            <!-- FORM MODAL INPUT DATA -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">Form Data</h5>
                                            <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- KALAU ERROR -->
                                            <div class="alert alert-danger error" role="alert" style="display: none">
                                            </div>
                                            <!-- KALAU SUKSES -->
                                            <div class="alert alert-primary sukses" role="alert" style="display: none">
                                            </div>
                                            <form>
                                                <input type="hidden" id="">
                                                <div class="mb-3">
                                                    <label for="inputIdTicket" class="form-label">
                                                        ID Ticket
                                                    </label>
                                                    <input type="text" class="form-control" id="inputIdTicket" aria-describedby="NameHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputProblem" class="form-label">
                                                        problem
                                                    </label>
                                                    <input type="text" class="form-control" id="inputProblem" aria-describedby="NameHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputNip" class="form-label">
                                                        NIP / NIP3K / NIK
                                                    </label>
                                                    <input type="text" class="form-control" id="inputNip" aria-describedby="NameHelp">
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="inputPic" class="form-label">
                                                        PIC
                                                    </label>
                                                    <input type="text" class="form-control" id="inputPic" aria-describedby="NameHelp">
                                                </div> -->
                                            
                                                <div class="mb-3">
                                                    <label for="inputStatus" class="form-label">Status</label>
                                                    <select id="inputStatus" class="form-select">
                                                        <option value="To Do" id="#todo">To Do</option>
                                                        <option value="Doing" id="#doing">Doing</option>
                                                        <option value="Done" id="#done">Done</option>
                                                        <option value="Pending" id="#pending">Pending</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputTanggal" class="form-label">
                                                        Tanggal
                                                    </label>
                                                    <input type="date" class="form-control" id="inputTanggal" aria-describedby="NameHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputTroubleshooting" class="form-label">
                                                        TroubleShooting
                                                    </label>
                                                    <input type="text" class="form-control" id="inputTroubleshooting" aria-describedby="NameHelp">
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="inputTroubleshooting" class="form-label">
                                                        Foto
                                                    </label>
                                                    <input type="canvas" class="form-control" id="inputFoto" aria-describedby="NameHelp">
                                                </div> -->
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" id="tombolSimpan" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END FOR MODAL INPUT -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- FORM TAMPIL DATA WEB -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-secondary" >Log Activity</h4>
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 5px;">No</th>
                                            <th scope="col">id_ticket</th>
                                            <th scope="col">Problem</th>
                                            <th scope="col">PIC</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Troubleshooting</th>
                                            <th scope="col">Foto</th>
                                            <!-- <th scope="col">Foto</th> -->
                                            <th style="width: 20px; min-width: 20px;">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($web as $we) : ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $we['id_ticket']; ?></td>
                                                <td><?= $we['problem']; ?></td>
                                                <td><?= $we['nip']; ?></td>
                                                <td><?= $we['pic']; ?></td>
                                                <td>
                                                    <div class="d-flex gap-2" style="font-size: 16px;">
                                                        <a href="#" class="badge badge-soft-success"><?= $we['status']; ?></a>
                                                    </div>
                                                </td>                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-20 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="edit(<?php echo $we['id_log']; ?>)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="hapus(<?php echo $we['id_log'] ?>)">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><?= $we['tanggal']; ?></td>
                                                <td><?= $we['troubleshooting']; ?></td>
                                                <td><?= $we['foto']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- ENDFROM TAMPIL DATA WEB -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div><!-- End Page-content -->
        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<?= $this->include('partials/right-sidebar') ?>

<!-- JAVASCRIPT -->
<?= $this->include('partials/vendor-scripts') ?>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>
<?= $this->include('function/functionLogactivity.php'); ?>
</body>

</html>