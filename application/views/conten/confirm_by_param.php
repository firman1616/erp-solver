<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Confirm By Param</h1>

    <?php
    if ($this->session->flashdata('kikc')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong><?php echo $this->session->flashdata('kikc') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } elseif ($this->session->flashdata('wow')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong><?php echo $this->session->flashdata('wow') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }
    ?>

    <div class="row">

        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Confirm By Date</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <table>
                        <tr>
                            <td>
                                <form action="<?= base_url('ConfirmByParam/confirm_kikc_bydate') ?>" method="post">
                                    <input type="hidden" name="kikcdate" id="kikcdate">
                                    <button type="submit" class="btn btn-primary">KIKC</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?= base_url('ConfirmByParam/confirm_wow_bydate') ?>" method="post">
                                    <input type="hidden" name="wowdate" id="wowdate">
                                    <button type="submit" class="btn btn-primary">WOW</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>


        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Confirm By Date Between</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="">Date Start</label>
                                <input type="date" class="form-control" name="datestart" id="datestart">
                            </div>
                            <div class="col">
                                <label for="">Date End</label>
                                <input type="date" class="form-control" name="dateend" id="dateend">
                            </div>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <form action="<?= base_url('ConfirmByParam/confirm_kikc_between') ?>" method="post">
                                    <div class="col"><input type="hidden" name="kikc_start" id="kikc_start"></div>
                                    <div class="col"><input type="hidden" name="kikc_end" id="kikc_end"></div>
                                    <button type="submit" class="btn btn-success">KIKC</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>


        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Confirm By WOW</h6>
                </div>
                <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap
                    utility classes. By using utility classes, the style of the card component can be
                    easily modified with no need for any custom CSS!
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Confirm By KIKC</h6>
                </div>
                <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap
                    utility classes. By using utility classes, the style of the card component can be
                    easily modified with no need for any custom CSS!
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    let select = document.querySelector('#date');
    let result = document.getElementById('kikcdate');
    let wow = document.getElementById('wowdate')
    select.addEventListener('change', function() {
        result.value = this.value;
        wow.value = this.value;
    });
</script>

<script>
    let start = document.querySelector('#datestart');
    let end = document.querySelector('#dateend')
    let kikc_s = document.getElementById('kikc_start');
    let kikc_e = document.getElementById('kikc_end')
    start.addEventListener('change', function() {
        kikc_s.value = this.value;
    });
    end.addEventListener('change', function() {
        kikc_e.value = this.value;
    });
</script>