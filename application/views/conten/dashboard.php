<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>


    <?php
    if ($this->session->flashdata('kikc')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Success <strong><?php echo $this->session->flashdata('kikc') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }
    ?>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <?php
        foreach ($problem_list->result() as $row) { ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= site_url($row->link_solver) ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?= $row->nama_solver ?></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row->sub_nama_solver ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas <?= $row->icon ?> fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php }
        ?>

        <!-- Earnings (Monthly) Card Example -->
    </div>
</div>