<table border=1 class="table">

    <?php

    foreach ($useraktif as $u) {

    ?>

        <tr>

            <th>Nama : <?= $u->nama; ?></th>

        </tr>

        <tr>

            <th>Kost Yang disewa</th>

        </tr>

    <?php

    } ?>

    <tr>

        <td>

            <div class="table-responsive">

                <table class="table">
                    <?php foreach ($items as $i) { ?>

                        <tr>
                            <td>Kost</td>
                            <td><?= $i['headline']; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>

                            <td><?= $i['kategori']; ?></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><?= $i['kota']; ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?= $i['harga']; ?></td>

                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td><?= $i['total_harga']; ?></td>

                        </tr>
                    <?php } ?>
                </table>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <h4>Terimakasih
                Sudah Menggunakan
                Layanan Kami</h4>
        </td>
    </tr>

    <tr>

        <td align="center">

            <?= md5(date('d M Y H:i:s')); ?>

        </td>

    </tr>

</table>