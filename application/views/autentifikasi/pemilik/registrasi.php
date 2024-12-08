<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4 mb-4">
                        <h1 class="h2">Daftar Pemilik</h1>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-3">
                                <form action="<?= base_url('pemilik/registrasi') ?>" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input class="form-control form-control-lg" type="text" name="nama" id="nama" placeholder="Enter your name" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Enter your email" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password1" id="passeord1" placeholder="Enter password" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ulangi Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password2" id="passeord2" placeholder="Enter password" />
                                    </div>
                                    <div class="d-grid gap-2 mt-3">
                                        <button class="btn btn-lg btn-primary">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        Already have account? <a href="<?= base_url('pemilik') ?>">Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>