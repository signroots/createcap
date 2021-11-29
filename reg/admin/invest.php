<?php
include 'main/head.php';

require '../db.php';
$d = new Db();
$in_db = $d->get('full', 'invest');


?>
<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<div class="main-content" id="result">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Investor </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Investor </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Invest Table</h4>


                            <table id="key-datatable" class="table dt-responsive table-striped nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($in_db as $k => $v) :
                                        $T = json_decode($v['json'], true); ?>

                                        <tr>
                                            <td> <?= $k + 1 ?></td>
                                            <td><?= $T['jsinvest_pri_name'] ?></td>
                                            <td> <?= $T['jsinvest_pri_email'] ?> </td>
                                            <td> <?= $T['jsinvest_pri_ph']  ?> </td>
                                            <td> <a target="_blank" href="for-print/invest.php?id=<?= $v['id'] ?>"> <i class="fas fa-eye"></i> </a>
                                                <button class="btn" data-bs-toggle="modal" data-bs-target="#del-modal" onclick="for_del(<?= $v['id'] ?>)"><i class="fas fa fa-trash"></i></button>

                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->




        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- End Page-content -->





<div id="del-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p> Are you sure ? </p>
            </div>
            <div class="modal-footer">
                <button type="button" s_id onclick="del(<?= $v['id'] ?>)" id="del_btn" class="btn btn-primary waves-effect waves-light">
                    Yes</button>
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">No</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


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

<script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script>
    function for_del(d) {
        $("#del_btn").attr('s_id', d)
    }

    function del() {
        $.get({
            url: 'delete.php',
            data: {
                id: $("#del_btn").attr('s_id'),
                from: 'invest'
            },
            dataType: 'json',
            beforeSend: () => {},
            success: (r) => {
                if (r.stat) {
                    location.reload()
                }
            },
            error: (e) => {},
            complete: () => {}
        })
    }
</script>

<?php include 'main/foot.php'; ?>