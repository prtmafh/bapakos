<!-- Begin Page Content -->
<main class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="row bg-light rounded ">

            <div class="col-lg-12">
                <?php if (validation_errors()) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php } ?>
                <?= $this->session->flashdata('pesan'); ?>
                <h2 class="text-center m-4">Daftar Kos Anda</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Pemilik</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tersedia</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($kos as $k) : ?>
                            <tr>
                                <td scope="row"><?= $a++; ?></td>
                                <td><?= $k['kategori']; ?></td>
                                <td><?= $k['user_id']; ?></td>
                                <td><?= $k['kota']; ?></td>
                                <td><?= $k['harga']; ?></td>
                                <td><?= $k['tersedia']; ?></td>
                                <td>
                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= base_url('assets/image/upload/') . $k['gambar']; ?>" class="img-fluid img-thumbnail" style="height: 150px;" alt="...">
                                    </picture>
                                </td>
                                <td>
                                    <!-- <a href="<?= base_url('buku/ubahBuku/') . $k['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a> -->
                                    <a href="<?= base_url('admin/hapusKos/') . $k['id_kos']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $k['headline']; ?> ?');" class="badge bg-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<!-- Modal Tambah buku baru-->