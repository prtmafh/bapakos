<!-- CONTENT 1 -->
<div class="container-sm text-center pt-4 pb-4">
    <h4 class="display-5 pt-5 pb-2">mau cari apa?</h4>
    <form class="d-inline-flex p-2" role="search">
        <input class="form-control ms-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
    </form>
</div>

<!-- CONTENT 2 CAROUSEL -->
<div class="container-md col-md-6">
    <div id="carouselExampleInterval" class="carousel slide rounded" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://static.mamikos.com/uploads/cache/data/event/2024-05-20/W26ju8Tv-540x720.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://static.mamikos.com/uploads/cache/data/event/2024-05-20/W26ju8Tv-540x720.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://static.mamikos.com/uploads/cache/data/event/2024-05-20/W26ju8Tv-540x720.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- CONTENT 3 -->
<div class="container-md">
    <div class="caption-card mt-5 row">
        <div class="col-md-6 display-6">Kosan terbaik di

            <a class="btn btn-danger dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih kota
            </a>

            <ul class="dropdown-menu">
                <?php foreach ($kota as $k) { ?>
                    <li><a class="dropdown-item" href="<?= base_url('home/lihatkos') ?>"><?= $k->kota ?></a></li>
                <?php } ?>
                <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
        </div>
    </div>
    <div class="overflow-x-scroll">
        <div class="d-flex flex-nowrap flex-row mt-5">
            <?php foreach ($kost as $k) : ?>
                <a href="<?php echo base_url('home/detailkos/') . $k->id_kos; ?>" class="text-decoration-none">
                    <div class="card card-big bg-transparent bg-gradient mb-3 me-3" style="width:270px;">
                        <div class="card-header"><img src="<?php echo base_url('assets/image/upload/') ?><?= $k->gambar; ?>" class="img-thumbnail  content-img" style="height: 150px;" alt="..."></div>
                        <div class="card-body text-dark">
                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <p class="border border-light border-opacity-25 text-light text-center"><?= $k->kategori; ?></p>
                                </div>
                            </div>
                            <p class="card-title text-truncate fw-bold"><?= $k->headline; ?></p>
                            <p class="card-text overflow-y-hidden text-black-50" style=" height: 80px"><?= $k->deskripsi; ?></p>
                            <div class="row">
                                <div class="col-md-auto fw-bold"><?= $k->harga; ?><small>/bulan</small></div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>