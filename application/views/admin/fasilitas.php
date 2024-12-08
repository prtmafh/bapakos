<main class="content">
    <div class="container-fluid p-0">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="row bg-light rounded  align-items-center justify-content-center p-4">
            <h2 class="text-center"><?= $judul ?></h2>
            <div class="col-md-5 bg-white rounded border border-dark">
                <?php if (validation_errors()) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php } ?>
                <form class="m-4" action="<?= base_url('admin/fasilitas'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-0 ">
                        <p>
                            Pilih Kos
                            <select class="form-select" name="kos_id" id="kos_id" required aria-label="select example">

                                <?php
                                foreach ($kos as $k) { ?>
                                    <option value="<?= $k['id_kos']; ?>"><?= $k['headline']; ?></option>
                                <?php } ?>
                        </p>
                        </select>
                    </div>

                    <div class="mb-3 mt-0 ">
                        <?php
                        foreach ($fasilitas as $u) { ?>
                            <input type="hidden" name="fasilitas" id="fasilitas" value="<?= $u['id_fasilitas']; ?>">
                        <?php } ?>
                        <p>
                            Wifi
                            <select class="form-select" name="wifi" id="wifi" required aria-label="select example">
                                <option value="ada">Ada</option>
                                <option value="-">-</option>
                            </select>
                        </p>
                    </div>
                    <div class="mb-3 mt-0 ">
                        <p>
                            Ac
                            <select class="form-select" name="ac" id="ac" required aria-label="select example">
                                <option value="ada">Ada</option>
                                <option value="-">-</option>
                            </select>
                        </p>
                    </div>
                    <div class="mb-3 mt-0 ">
                        <p>
                            Kasur
                            <select class="form-select" name="kasur" id="kasur" required aria-label="select example">
                                <option value="ada">Ada</option>
                                <option value="-">-</option>
                            </select>
                        </p>
                    </div>
                    <div class="mb-3 mt-0 ">
                        <p>
                            Dapur
                            <select class="form-select" name="dapur" id="dapur" required aria-label="select example">
                                <option value="ada">Ada</option>
                                <option value="-">-</option>
                            </select>
                        </p>
                    </div>
                    <div class="mb-3 mt-0 ">
                        <p>
                            Kipas
                            <select class="form-select" name="kipas" id="kipas" required aria-label="select example">
                                <option value="ada">Ada</option>
                                <option value="-">-</option>
                            </select>
                        </p>
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-primary text-light" type="submit">Ajukan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>