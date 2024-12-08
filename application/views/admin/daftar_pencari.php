<main class="content">
    <div class="table-responsive table-bordered col-sm-12 ">
        <div class="page-header text-center">
            <h3 class="fas fa-book text-dark mt-2 "> Data Pencari</h3>
            <!-- <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a> -->
        </div>
        <div class="table-responsive">
            <table class="table mt-3" id="table-datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Kota</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pencari as $b) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $b['id_user']; ?></td>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['email']; ?></td>
                            <td><?= $b['jenis_kelamin']; ?></td>
                            <td><?= $b['kota']; ?></td>
                            <td> <a href="<?= base_url('admin/hapusKos/') . $b['id_user']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $pemilik . ' ' . $b['nama']; ?> ?');" class="badge bg-danger"><i class="fas fa-trash"></i> Hapus</a></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>