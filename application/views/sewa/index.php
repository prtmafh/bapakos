<main class="container">
    <div class="container" style="margin-top: 138px;">
        <center>
            <h3 class="mb-6">INVOICE</h3>
            <table class="table" style="margin-bottom: 150px;">


                <?php foreach ($user as $u) { ?>
                    <tr>
                        <td>Terima Kasih <b><?= $u['nama']; ?></b>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>Berikut Adalah Rincian Pesanan Anda</td>
                </tr>


                <tr>

                    <td>

                        <div class=" table-responsive">

                            <table class="table m-4" id="table-datatable">


                                <?php foreach ($sewa as $u) { ?>
                                    <tr>
                                        <th>Nama </th>
                                        <td>: <?= $u->nama; ?></td>

                                    </tr>

                                    <tr>
                                        <th>Email </th>
                                        <td>: <?= $u->email; ?></td>

                                    </tr>

                                    <tr>
                                        <th class="col-2">Harga </th>
                                        <td> : <?= $u->harga; ?></td>
                                    </tr>

                                    <tr>
                                        <th>Lama Sewa </th>
                                        <td> : <?= $u->lama_sewa; ?> Bulan</td>
                                    </tr>
                                    <tr>
                                        <th>Total Harga </th>
                                        <td>: <?= $u->total_harga; ?></td>
                                    </tr>

                                    <!-- <a href="<?= base_url('home/invoice/') . $u->id_sewa; ?>">Klik untuk melihat detail</a> -->
                                    <tr>

                                        <td>

                                            <a class="btn btn-sm btn-outline-danger" href="<?php echo base_url() . 'home/exportToPdf/' . $u->id_sewa; ?>"><span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a>

                                        </td>

                                    </tr>

                                <?php } ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>





        </center>

    </div>
</main>