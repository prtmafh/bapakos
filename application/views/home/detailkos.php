<?php foreach ($kos as $k) : ?>
    <div class="container-fluid mt-5">

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner bg-dark">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>assets/image/upload/<?= $k['gambar']; ?>" class="d-block w-100 img-d" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/image/upload/<?= $k['gambar']; ?>" class="d-block w-100 img-d" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/image/upload/<?= $k['gambar']; ?>" class="d-block w-100 img-d" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/image/upload/<?= $k['gambar']; ?>" class="d-block w-100 img-d" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<?php endforeach ?>
<?php foreach ($kos as $k) : ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                <div class="h2"><?= $k['headline']; ?></div>
                <div class="row">
                    <p class="border border-light border-opacity-25 text-light text-center col-auto"><?= $k['kategori']; ?></p>
                    <i class="bi bi-geo-alt-fill col-auto"><span class="fw-bold"><?= $k['kota']; ?></span></i>
                    <i class="bi bi-star-fill col-auto"><span class="fw-bold">4,7</span></i>
                </div>
                <div class="h2 mt-5 text-capitalize">Fasilitas apa saja</div>
                <ul class="row list-unstyled mt-3 row-cols-2" style="font-size: 20x;">
                    <li class="col">
                        Wifi : <?= $k['wifi'] ?>
                    </li>
                    <li class="col">
                        AC : <?= $k['ac'] ?>
                    </li>
                    <li class="col">
                        Kasur : <?= $k['kasur'] ?>
                    </li>
                    <li class="col">
                        Dapur : <?= $k['dapur'] ?>
                    </li>
                    <li class="col">
                        Kipas : <?= $k['kipas'] ?>
                    </li>
                </ul>
                <div class="h2 mt-5 text-capitalize">Deskripsi Kos</div>
                <div class="deskription overflow-y-auto bg" style="height: 290px;">
                    <?= $k['deskripsi'] ?>
                </div>
                <p class="h3 text-capitalize mt-5">review pengguna</p>
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light rounded-2 p-5">
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate totam esse voluptatum, consequatur quidem id quia sapiente quae unde ab dignissimos labore, vitae tenetur itaque fuga repellendus, ea eos porro?</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="gradient rounded-2 mt-4 d-none d-sm-none d-md-block d-xl-block col-md-5 col-lg-4">
                <div class="sticky-top" style="top: 90px;">
                    <div class="row m-3">
                        <img src="https://th.bing.com/th/id/OIP.GHGGLYe7gDfZUzF_tElxiQHaHa?w=190&h=190&c=7&r=0&o=5&pid=1.7" class="img-thumbnail rounded-circle col-3" alt="">
                        <p class="h3 fw-bold mt-4 col-sm-auto"><?= $user ?></p>
                    </div>
                    <a href="<?= base_url('home/sewa_kos/') . $k['id_kos'] ?>  ?>" class="btn btn-danger col-12 mt-3"> AJUKAN SEWA</a>
                    <a href="#" class="btn btn-outline-danger col-12 mt-3"><i class="bi bi-chat-left-dots"></i> TANYA
                        PEMILIK</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="bg-dark bg-gradient d-md-none fixed-bottom">
            <div class="row">
                <p class="col-auto m-2 h5 text-light"><?= $k['harga']; ?></p><span class="col-auto m-2 text-light"><em>/Bulan</em></span>
            </div>
            <div class="row">
                <a class="btn m-3 btn-outline-danger col-5" href="loginpencari.html">Sewa Kamar</a>
                <a class="btn m-3 btn-outline-danger col-5" href="#"> Tanya-Tanya</a>
            </div>
        </div>
    </div>
<?php endforeach ?>