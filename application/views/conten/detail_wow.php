<?php
foreach ($detail_ikt->result() as $row) {
    $a = $row->wow_no;
    $b = $row->wow_date;
    $c = $row->prd_code;
    $d = $row->motive_name;
    $e = $row->qty;
    $f = $row->length;
    $g = $row->kd_patrun;
    $h = $row->pjg_lusi;
    $i = $row->pjg_pakan;
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail IKT </h1>
    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data IKT <?= $a ?></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 15%;">WOW No</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td style="width: 15%;"><?= $a ?></td>
                        <th style="width: 10%;">QTY (pcs)</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td><?= $e ?></td>
                        <th style="width: 10%;">Pakan</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td><?= number_format($i) ?></td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 15%;">TGL WOW</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td style="width: 15%;"><?= date('d M Y', strtotime($b)) ?></td>
                        <th scope="row" style="width: 10%;">Panjang</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td><?= $f ?></td>
                        <th scope="row" style="width: 10%;"></th>
                        <td style="width: 7%;" align="center"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 15%;">Kd Prod</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td style="width: 15%;"><?= $c ?></td>
                        <th scope="row" style="width: 10%;">No. Patrun</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td><?= $g ?></td>
                        <th scope="row" style="width: 10%;"></th>
                        <td style="width: 7%;" align="center"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 15%;">Motive</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td scope="row" style="width: 15%;"><?= $d ?></td>
                        <th>Lusi</th>
                        <td style="width: 7%;" align="center">:</td>
                        <td><?= number_format($h) ?></td>
                        <th scope="row" style="width: 10%;"></th>
                        <td style="width: 7%;" align="center"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Lusi -->
    <br>
    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data IKT <?= $a ?></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Lusi -->

</div>
<!-- /.container-fluid -->