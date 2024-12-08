<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4 mb-4">
                        <h1 class="h2">Welcome!</h1>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-3">
                                <?= $this->session->flashdata('pesan'); ?>
                                <form action="<?= base_url('pemilik') ?>" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="d-grid gap-2 mt-3">
                                        <button class="btn btn-lg btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        Don't have an account? <a href="<?= base_url('') ?>pemilik/registrasi">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>