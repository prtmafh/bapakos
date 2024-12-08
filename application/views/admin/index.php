<div class="container-fluid pt-4 px-4">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row bg-light rounded  align-items-center justify-content-center p-4">
        <h2 class="text-center"><?= $judul ?></h2>
        <div class="col-md-8 bg-white rounded border border-dark">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <form class="m-4" action="<?= base_url('admin/tambahKos'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="user_id" id="user_id" value="<?= $user['id_user']; ?>">
                <div class="mb-3">
                    <label for="validationServer03" class="form-label fw-bold">Headline kos</label>
                    <textarea class="form-control" id="headdline" name="headline" placeholder="" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label fw-bold">Kategori</label>
                    <select class="form-select" name="kategori" id="kategori" required aria-label="select example">

                        <?php
                        foreach ($kategori as $k) { ?>
                            <option value="<?= $k['kategori']; ?>"><?= $k['kategori']; ?></option>
                        <?php } ?>
                    </select>

                </div>

                <div class="mb-3 ">
                    <label for="validationServer03" class="form-label fw-bold">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" aria-describedby="validationServer03Feedback" required>

                </div>
                <div class="mb-3">
                    <label for="validationServer03" class="form-label fw-bold">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="validationServer03Feedback" required>

                </div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label fw-bold">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="" required></textarea>

                </div>
                <div class="mb-3 col-md-5">
                    <label for="validationServer03" class="form-label fw-bold">Tersedia</label>
                    <input type="number" class="form-control" id="tersedia" name="tersedia" aria-describedby="validationServer03Feedback" required>

                </div>
                <div class="mb-3 col-md-5">
                    <label for="validationServerUsername" class="form-label">Harga/bulan</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">Rp</span>
                        <input type="text" class="form-control " id="harga" name="harga" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>

                    </div>
                </div>
                <div class="mb-3">
                    <label for="validationServer03" class="form-label fw-bold">Masukan Foto Kost Anda</label>
                    <input type="file" id="gambar" name="gambar" class="form-control" aria-label="file example" required>

                </div>

                <div class="mb-3">
                    <button class="btn btn-primary text-light" type="submit">Ajukan</button>
                </div>
            </form>
        </div>
    </div>
</div>