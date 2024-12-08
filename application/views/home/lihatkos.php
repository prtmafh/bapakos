<!-- NAVBAR END -->
<div class="container">
    <div class="col-md-9" style="margin-top: 100px;">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger dropdown-toggle fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Filter
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="caption-card mt-5 row">
            <div class="row row-cols-2 justify-content-lg-center">
                <?php foreach ($kos as $k) : ?>
                    <div class="col-md-3 mt-5">
                        <a href="<?= base_url('home/detailkos/') . $k->id_kos; ?>" class="text-decoration-none">
                            <div class="card bg-transparent bg-gradient mb-3" style="max-width: 18rem;">
                                <div class="card-header"><img src="<?= base_url('assets/image/upload/') ?><?= $k->gambar; ?>" class="img-thumbnail  content-img" style="height: 150px;" alt="..."></div>
                                <div class="card-body text-dark">
                                    <div class="row">
                                        <div class="col-5 col-md-5">
                                            <p class="border border-light border-opacity-25 text-light text-center">
                                                <?= $k->kategori; ?></p>
                                        </div>
                                        <div class="col-md-5">

                                        </div>
                                    </div>
                                    <p class="card-title text-truncate fw-bold"><?= $k->headline; ?></p>
                                    <p class="card-text overflow-y-hidden text-black-50" style=" height: 80px"><?= $k->deskripsi; ?></p>
                                    <div class="row">
                                        <div class="col-md-auto fw-bold"><?= $k->harga; ?><em><small class="text-black-50">/Bulan pertama</small></em></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>