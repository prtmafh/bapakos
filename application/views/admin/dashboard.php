<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Blank Page</h1>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Data Kos Tersedia</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <a href="<?= base_url('admin/dataKos') ?>"><i class="align-middle" data-feather="home"></i></a>

                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">
                            <?php
                            $where = ['tersedia != 0'];
                            $totalkos = $this->ModelKos->total('tersedia', $where);
                            echo $totalkos;
                            ?>
                        </h1>
                        <div class="mb-0">
                            <!-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                            <span class="text-muted">Since last week</span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Data Pencari</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <a href="<?= base_url('admin/pencari') ?>"><i class="align-middle" data-feather="users"></i></a>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">
                            <?= $this->ModelUser->getUserWhere(['id_role' => 3])->num_rows(); ?>

                        </h1>
                        <div class="mb-0">
                            <!-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                            <span class="text-muted">Since last week</span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Data Pemilik</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <a href="<?= base_url('admin/pemilik') ?>"> <i class="align-middle" data-feather="user"></i></a>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"> <?= $this->ModelUser->getUserWhere(['id_role' => 2])->num_rows(); ?></h1>
                        <div class="mb-0">
                            <!-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                            <span class="text-muted">Since last week</span> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Data Sewa Kos</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">

                        </h1>
                        <div class="mb-0">
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                            <span class="text-muted">Since last week</span>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>

    </div>
</main>