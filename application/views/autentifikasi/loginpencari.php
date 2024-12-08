<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Pencari</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('pencari'); ?>">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email/nomor
                                            telepon</label>
                                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= set_value('email'); ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">ingat saya</label>
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger col-lg-5">login</button>
                                </form>
                                <div class="text-center">
                                    <a class="small text-danger text-decoration-none" href="<?= base_url('pencari/registrasi'); ?>">Belum punya akun?
                                        Daftar lah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>