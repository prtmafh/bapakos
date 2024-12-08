<div class="container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-7 col-lg-8 p-5">
            <h2 class="text-center">Isi Formulir Sewa</h2>
            <form action="<?= base_url('home/sewa_kos'); ?>" method="post">
                <?php foreach ($user as $s) { ?>
                    <input type="hidden" name="id_user" id="id_user" value="<?= $s['id_user'] ?>">
                    <input type="hidden" name="id_kos" id="id_user" value="<?= $s['id_kos'] ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control bg-secondary" name="nama" id="nama" value="<?= $s['nama']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control bg-secondary" name="email" id="email" value="<?= $s['email']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat anda</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                        <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No telepon</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="exampleFormControlInput1" class="form-label">Lama Sewa</label><span>/Bulan</span>
                        <input type="number" class="form-control" id="lama_sewa" name="lama_sewa">

                    </div>
                    <?php foreach ($kos as $k) { ?>
                        <input type="hidden" name="harga" id="harga" value="<?= $k['harga']; ?>">
                        <input type="hidden" name="id_kos" id="id_kos" value="<?= $k['id_kos']; ?>">
                    <?php } ?>
                    <button type="submit" class="btn btn-danger col-12"><a href="<?= base_url('home/invoice/') . $sewa->id_sewa ?>"></a>Sewa</button>
                <?php } ?>
            </form>
        </div>
        <div class="gradient rounded-2 mt-4 d-none d-sm-none d-md-block d-xl-block col-md-5 col-lg-4">
            <div class="sticky-top" style="top: 90px;">
                <div class="row m-3">
                    <img src="https://th.bing.com/th/id/OIP.GHGGLYe7gDfZUzF_tElxiQHaHa?w=190&h=190&c=7&r=0&o=5&pid=1.7" class="img-thumbnail rounded-circle col-3" alt="">
                    <p class="h3 fw-bold mt-4 col-sm-auto"><?= $s['nama']; ?></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col h5">Harga</div>
                <?php foreach ($kos as $k) : ?>
                    <div class="col h5 p-0"><span><?= $k['harga']; ?></span><?php endforeach ?>/bulan</div>

            </div>

        </div>
    </div>
</div>