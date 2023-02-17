<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">KIKC</h1>

    <?php
    if ($this->session->flashdata('kikc')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            The Work Order Dyeing, Success to <strong><?php echo $this->session->flashdata('kikc') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Data KIKC</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. KIKC</th>
                            <th>WOD Date</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x = 1;
                        foreach ($list_kikc->result() as $row) { ?>
                            <tr>
                                <td><?= $x++; ?></td>
                                <td><?= $row->wod_no ?></td>
                                <td><?= date('d-m-Y', strtotime($row->wod_date)) ?></td>
                                <td><?= $row->notes ?></td>
                                <td>
                                    <a href="<?= base_url('KIKC/v_edit_data/' . $row->id) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->