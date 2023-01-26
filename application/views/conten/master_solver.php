<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master</h1>

    <?php
    if ($this->session->flashdata('master')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            The Master Problem, Success <strong><?php echo $this->session->flashdata('master') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }
    ?>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Config Master Problem List</h6>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i>
            </button>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Problem Name</th>
                            <th>Problem Sub Name</th>
                            <th>Icon</th>
                            <th>Controller</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x = 1;
                        foreach ($master_list->result() as $row) { ?>
                            <tr>
                                <td><?= $x++; ?></td>
                                <td><?= $row->nama_solver ?></td>
                                <td><?= $row->sub_nama_solver ?></td>
                                <td><?= $row->icon ?></td>
                                <td><?= $row->link_solver ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('Master/add_master') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Master</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Name">Problem Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="SubName">Problem Sub Name</label>
                        <input type="text" class="form-control" id="subname" name="subname">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon">
                    </div>
                    <div class="form-group">
                        <label for="controller">Link Controller</label>
                        <input type="text" class="form-control" id="controller" name="controller">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>