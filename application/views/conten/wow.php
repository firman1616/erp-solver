<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List IKT</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Work Order Weaving</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>No. IKT</th>
                            <th>No. Bukti</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x = 1;
                        foreach ($list_wow->result() as $row) {
                            $status = $row->wow_status ?>
                            <tr>
                                <td><?= $x++; ?></td>
                                <td>
                                    <?php
                                    if ($status == 1) { ?>
                                        <span class="badge badge-info">Open</span>
                                    <?php } elseif ($status == 2) { ?>
                                        <span class="badge badge-danger">Cancel</span>
                                    <?php } else { ?>
                                        <span class="badge badge-success">Confirm</span>
                                    <?php }
                                    ?>
                                </td>
                                <td><?= date('d M Y', strtotime($row->wow_date)) ?></td>
                                <td><?= $row->wow_no ?></td>
                                <td><?= $row->pattern_no ?></td>
                                <td>
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                    <?php if ($status != 1) { ?>
                                        <a href="<?= base_url('IKT/unlock_ikt/' . $row->wow_no) ?>" class="btn btn-danger"><i class="fa fa-lock-open"></i></a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('IKT/lock_ikt/' . $row->wow_no) ?>" class="btn btn-danger"><i class="fa fa-lock"></i></a>
                                    <?php } ?>
                                    <!-- <button type="button" class="btn btn-danger"><i class="fa fa-lock-open"></i></button> -->
                                    <button type="button" class="btn btn-warning"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->