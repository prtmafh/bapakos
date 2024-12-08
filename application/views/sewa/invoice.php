<main class="container">
    <div class="container-fluid" style="padding: 140px;">
        <center>
            <h3 class="mb-3">Daftar Penyewaan Kost Anda </h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col-2">#</th>
                        <th scope="col-2">Id Sewa</th>
                        <th scope="col-2">Nama</th>
                        <th scope="col-2">Email</th>
                        <th scope="col-2">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1; ?>
                    <?php foreach ($sewa as $s) { ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $s->id_sewa; ?></td>


                            <td><?= $s->email; ?></td>
                            <td>
                                <?= $s->nama; ?>
                            </td>
                            <td><a href="<?= base_url('home/detail_invoice/') . $s->id_sewa ?>">
                                    Detail
                                </a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </center>
    </div>
</main>