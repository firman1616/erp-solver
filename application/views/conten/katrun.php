<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kebutuhan Patrun</h1>

    <?php
    if ($this->session->flashdata('katrun')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data No Bukti Kebut Patrun, Berhasil di <strong><?php echo $this->session->flashdata('katrun') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Kebutuhan Patrun</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Katrun/update_no_bukti') ?>" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">No Bukti Lama</label>
                    <input type="text" class="form-control" id="no_bukti1" name="no_bukti1" placeholder="0021/DSN/03/2023">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No Bukti Baru</label>
                    <input type="text" class="form-control" id="no_bukti2" name="no_bukti2" placeholder="0021/DSN/03/2023X">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> | Update</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->