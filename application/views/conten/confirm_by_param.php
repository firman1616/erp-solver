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
    <?php } elseif ($this->session->flashdata('wow')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong><?php echo $this->session->flashdata('wom') ?></strong>
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
                    <h6 class="m-0 font-weight-bold text-primary">Update By Date</h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Update By Date Between</h6>
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
                            <td>
                                <form action="<?= base_url('ConfirmByParam/confirm_wop_between') ?>" method="post">
                                    <div class="col"><input type="hidden" name="wop_start" id="wop_start"></div>
                                    <div class="col"><input type="hidden" name="wop_end" id="wop_end"></div>
                                    <button type="submit" class="btn btn-success">WOP</button>
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
                    <h6 class="m-0 font-weight-bold text-primary">Trans No and Status</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" disabled selected>--Choose One--</option>
                                <option value="1">Open</option>
                                <option value="3">Confirm</option>
                                <option value="2">Cancel</option>
                                <option value="8">Partial</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Trans No</label>
                            <input type="text" class="form-control" name="trans_no" id="trans_no">
                        </div>
                    </div>
                    <br>
                    <table>
                        <tr>
                            <td>
                                <form action="<?= base_url('ConfirmByParam/confirm_wop') ?>" method="post">
                                    <div class="col"><input type="hidden" name="status2" id="status2"></div>
                                    <div class="col"><input type="hidden" name="trans_no2" id="trans_no2"></div>
                                    <button type="submit" class="btn btn-primary">WOP</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?= base_url('ConfirmByParam/confirm_wom') ?>" method="post">
                                    <div class="col"><input type="hidden" name="wom_stat" id="wom_stat"></div>
                                    <div class="col"><input type="hidden" name="wom_trans" id="wom_trans"></div>
                                    <button type="submit" class="btn btn-primary">WOM</button>
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
    let wop_s = document.getElementById('wop_start');
    let wop_e = document.getElementById('wop_end')
    start.addEventListener('change', function() {
        kikc_s.value = this.value;
        wop_s.value = this.value;
    });
    end.addEventListener('change', function() {
        kikc_e.value = this.value;
        wop_e.value = this.value;
    });
</script>


<script>
    let status = document.querySelector('#status');
    let trans_no = document.querySelector('#trans_no')
    let status2 = document.getElementById('status2');
    let trans_no2 = document.getElementById('trans_no2')
    let wom_stat = document.getElementById('wom_stat');
    let wom_trans = document.getElementById('wom_trans')
    status.addEventListener('change', function() {
        status2.value = this.value;
        wom_stat.value = this.value;
    });
    trans_no.addEventListener('change', function() {
        trans_no2.value = this.value;
        wom_trans.value = this.value;
    });
</script>