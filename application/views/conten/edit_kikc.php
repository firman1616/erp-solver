<?php
foreach ($edit_kikc->result() as $row) {
    $kikc = $row->wod_no;
    // $pattern = $row->pattern_no;
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data KIKC</h1>
    <!-- Basic Card Example -->
    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data KIKC <?= $kikc ?></h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('KIKC/update_kikc/' . $row->wod_no) ?>" method="post">
                <div class="form-group col-md-3">
                    <label for="exampleFormControlInput1">KIKC No</label>
                    <input type="text" class="form-control" id="kikc" name="kikc" value="<?= $kikc ?>">
                </div>
                <!-- <div class="form-group col-md-3">
                    <label for="exampleFormControlInput1">Pattern No</label>
                    <input type="text" class="form-control" id="pattern" name="pattern" value="<?= $pattern ?>">
                </div> -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> | Update Data</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->